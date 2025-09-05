<?php

namespace Webkul\LSC\Listeners;

use LSCache;

class Order extends Product
{
    /**
     * After order is created
     *
     * @param  \Webkul\Sale\Contracts\Order  $order
     * @return void
     */
    public function afterCancelOrCreate($order)
    {
        foreach ($order->all_items as $item) {
            if (! $item->product) {
                continue;
            }

            $urls = $this->getForgettableUrls($item->product);

            LSCache::purgeTags($urls);
        }
    }
}
