<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'برای بهبود عملکرد، تنظیمات LSCache را پیکربندی کنید.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'برنامه LiteSpeed Cache و تنظیمات مرتبط را مدیریت کنید.',
                    'title' => 'پیکربندی',

                    'cache-application' => [
                        'info'             => 'گزینه‌های برنامهٔ کش را تنظیم کنید.',
                        'title'            => 'برنامهٔ کش',
                        'title-info'       => 'تنظیمات برنامهٔ کش را پیکربندی کنید.',
                        'status'           => 'وضعیت',
                        'default-ttl'      => 'TTL پیش‌فرض (زمان ماندگاری)',
                        'default-ttl-info' => 'زمان ماندگاری پیش‌فرض برای آیتم‌های کش‌شده را بر حسب ثانیه مشخص کنید <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[اطلاعات بیشتر]</a>.',
                        'guest-only'       => 'فقط برای مهمان‌ها',
                        'guest-only-info'  => 'فعال کردن کش فقط برای کاربران مهمان. در صورت غیرفعال بودن، کش برای همه کاربران اعمال خواهد شد.',
                    ],
                ],
            ],
        ],
    ],
];
