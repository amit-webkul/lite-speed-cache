<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'Налаштуйте параметри LSCache для покращення продуктивності.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'Керуйте застосунком LiteSpeed Cache та пов\'язаними налаштуваннями.',
                    'title' => 'Налаштування',

                    'cache-application' => [
                        'info'             => 'Налаштуйте параметри кеш-застосунку.',
                        'title'            => 'Застосунок кешу',
                        'title-info'       => 'Налаштуйте параметри кеш-застосунку.',
                        'status'           => 'Статус',
                        'default-ttl'      => 'TTL за замовчуванням (час життя)',
                        'default-ttl-info' => 'Встановіть час життя кешованих елементів за замовчуванням у секундах <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[Детальніше]</a>.',
                        'guest-only'       => 'Лише для гостей',
                        'guest-only-info'  => 'Увімкніть кешування лише для гостей. Якщо вимкнено, кешування буде застосовано до всіх користувачів.',
                    ],
                ],
            ],
        ],
    ],
];