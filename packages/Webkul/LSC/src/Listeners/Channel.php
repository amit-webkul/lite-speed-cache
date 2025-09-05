<?php

namespace Webkul\LSC\Listeners;

use LSCache;

class Channel
{
    /**
     * After channel update.
     *
     * @param  \Webkul\Core\Contracts\Channel  $channel
     * @return void
     */
    public function afterUpdate($channel)
    {
        LSCache::purgeAll();
    }
}
