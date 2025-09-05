<?php

namespace Webkul\LSC\Http\Middleware;

use Closure;
use Litespeed\LSCache\LSCacheMiddleware as BaseLSCacheMiddleware;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Marketing\Repositories\SearchTermRepository;
use Webkul\Marketing\Repositories\URLRewriteRepository;

class LSCacheHeaders extends BaseLSCacheMiddleware
{
    protected $cacheRoutes = [
        'shop.home.index',
        'shop.cms.page',
        'shop.product_or_category.index',
        'shop.home.contact_us',
        'shop.search.index',
        'shop.compare.index',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'customer')
    {
        $response = $next($request);

        if ((bool) config('responsecache.enabled')) {
            return $response;
        }

        if (! (bool) core()->getConfigData('lsc.configuration.cache_application.active')) {
            return $response;
        }

        $route = $request->route();
        $routeName = $route?->getName();
        $routePathInfo = $request->getPathInfo();

        if (! in_array($routeName, $this->cacheRoutes, true)) {
            return $response;
        }

        $slug = urldecode(trim($routePathInfo, '/'));
        $lastSegment = last(explode('/', $routePathInfo));

        $tags = match ($routeName) {
            'shop.home.index'                => ['home'],
            'shop.cms.page'                  => ["page_$lastSegment"],
            'shop.product_or_category.index' => $this->getProductOrCategoryTags($slug),
            'shop.home.contact_us'           => ['contact'],
            'shop.search.index'              => ['search'],
            'shop.compare.index'             => ['compare'],
            default                          => [],
        };

        $lsCacheGuestOnly = env('LSCACHE_GUEST_ONLY', (bool) core()->getConfigData('lsc.configuration.cache_application.guest_only'));
        
        $lsCacheTTL = env('LSCACHE_DEFAULT_TTL', (int) core()->getConfigData('lsc.configuration.cache_application.default_ttl'));
        
        $lsCacheCacheability = env('LSCACHE_DEFAULT_CACHEABILITY', 'public');
        
        $lscacheControl = "$lsCacheCacheability, max-age=$lsCacheTTL";

        if (empty($tags) || $lsCacheTTL === 0) {
            return $this->setNoCacheHeaders($response);
        }
        
        $validCondition = in_array($request->getMethod(), ['GET', 'HEAD']) && $response->getContent() && $response->getStatusCode() === 200;

        if ($validCondition && $lsCacheGuestOnly && auth()->guard($guard)->check()) {
            return $this->setNoCacheHeaders($response);
        }

        if (! $validCondition) {
            return $this->setNoCacheHeaders($response);
        }

        $response->headers->set('Cache-Control', $lscacheControl);
        $response->headers->set('X-LiteSpeed-Cache-Control', $lscacheControl);
        $response->headers->set('X-LiteSpeed-Tag', implode(',', $tags));

        return $response;
    }

    /**
     * Get tags for product or category based on the request.
     */
    protected function getProductOrCategoryTags(string $slug): array
    {
        if ($category = app(CategoryRepository::class)->findBySlug($slug)) {
            return ['category_'.$slug];
        }

        if (core()->getConfigData('catalog.products.search.engine') == 'elastic') {
            $searchEngine = core()->getConfigData('catalog.products.search.storefront_mode');
        }

        $product = app(ProductRepository::class)
            ->setSearchEngine($searchEngine ?? 'database')
            ->findBySlug($slug);

        if ($product) {
            if (
                ! $product->url_key
                || ! $product->visible_individually
                || ! $product->status
            ) {
                abort(404);
            }

            return ['product_'.$slug];
        }

        return ['slug_'.$slug]; // fallback
    }

    /**
     * Set no-cache headers for the response.
     */
    protected function setNoCacheHeaders($response)
    {
        $response->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');

        $response->headers->set('X-LiteSpeed-Cache-Control', 'no-cache');
        
        return $response;
    }
}
