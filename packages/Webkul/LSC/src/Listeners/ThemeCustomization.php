<?php

namespace Webkul\LSC\Listeners;

use LSCache;

class ThemeCustomization
{
    /**
     * After theme customization create
     * @return void
     */
    public function afterCreate()
    {
        LSCache::purgeTags(['home']);
    }

    /**
     * After theme customization update
     * @return void
     */
    public function afterUpdate()
    {
        LSCache::purgeTags(['home']);
    }

    /**
     * Before theme customization delete
     *
     * @return void
     */
    public function beforeDelete()
    {
        LSCache::purgeTags(['home']);
    }
}
