<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'Configureer LSCache-instellingen voor betere prestaties.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'Beheer LiteSpeed Cache-applicatie en gerelateerde instellingen.',
                    'title' => 'Configuratie',

                    'cache-application' => [
                        'info'             => 'Stel opties voor de cache-applicatie in.',
                        'title'            => 'Cache-applicatie',
                        'title-info'       => 'Configureer de instellingen van de cache-applicatie.',
                        'status'           => 'Status',
                        'default-ttl'      => 'Standaard TTL (Time To Live)',
                        'default-ttl-info' => 'Stel de standaard levensduur (in seconden) in voor gecachte items <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[Meer info]</a>.',
                        'guest-only'       => 'Alleen gasten',
                        'guest-only-info'  => 'Schakel caching alleen voor gastgebruikers in. Als dit is uitgeschakeld, wordt caching toegepast op alle gebruikers.',
                    ],
                ],
            ],
        ],
    ],
];