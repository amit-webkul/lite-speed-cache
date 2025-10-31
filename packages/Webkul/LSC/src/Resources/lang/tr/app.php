<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'Geliştirilmiş performans için LSCache ayarlarını yapılandırın.',
                'title' => 'LiteSpeed Önbellek',

                'configuration' => [
                    'info'  => 'LiteSpeed Cache uygulamasını ve ilgili ayarları yönetin.',
                    'title' => 'Yapılandırma',

                    'cache-application' => [
                        'info'             => 'Önbellek uygulaması seçeneklerini belirleyin.',
                        'title'            => 'Önbellek Uygulaması',
                        'title-info'       => 'Önbellek uygulaması ayarlarını yapılandırın.',
                        'status'           => 'Durum',
                        'default-ttl'      => 'Varsayılan TTL (Time To Live)',
                        'default-ttl-info' => 'Önbelleğe alınan öğelerin varsayılan yaşam süresini saniye cinsinden belirleyin <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[Daha Fazla Bilgi]</a>.',
                        'guest-only'       => 'Yalnızca Misafirler',
                        'guest-only-info'  => 'Önbellekleme yalnızca misafir kullanıcılar için etkinleştirilsin. Devre dışı bırakılırsa, önbellekleme tüm kullanıcılar için uygulanır.',
                    ],
                ],
            ],
        ],
    ],
];
