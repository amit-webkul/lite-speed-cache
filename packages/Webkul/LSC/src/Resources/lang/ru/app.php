<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'Настройте параметры LSCache для повышения производительности.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'Управляйте приложением LiteSpeed Cache и сопутствующими настройками.',
                    'title' => 'Конфигурация',

                    'cache-application' => [
                        'info'             => 'Установите параметры кэш-приложения.',
                        'title'            => 'Кэш-приложение',
                        'title-info'       => 'Настройка параметров кэш-приложения.',
                        'status'           => 'Статус',
                        'default-ttl'      => 'TTL по умолчанию (время жизни)',
                        'default-ttl-info' => 'Установите время жизни кэшированных элементов по умолчанию в секундах <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[Подробнее]</a>.',
                        'guest-only'       => 'Только для гостей',
                        'guest-only-info'  => 'Включите кэширование только для гостей. Если отключено, кэширование будет применяться ко всем пользователям.',
                    ],
                ],
            ],
        ],
    ],
];
