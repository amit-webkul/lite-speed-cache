<?php

use Illuminate\Support\Facades\Route;
use Webkul\LSC\Http\Controllers\API\LoginContentController;
use Webkul\LSC\Http\Middleware\NoLiteSpeedCache;

Route::group(['middleware' => [NoLiteSpeedCache::class], 'prefix' => 'api'], function () {
    Route::get('login-desktop-dropdown', [LoginContentController::class, 'getLoginDesktopDropdownHtml'])
        ->name('shop.api.home.login_desktop_dropdown');

    Route::get('login-mobile-dropdown', [LoginContentController::class, 'getLoginMobileDropdownHtml'])
        ->name('shop.api.home.login_mobile_dropdown');

    Route::get('login-mobile-drawer', [LoginContentController::class, 'getLoginMobileDrawerHtml'])
        ->name('shop.api.home.login_mobile_drawer');
});
