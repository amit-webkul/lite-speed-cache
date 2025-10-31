<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'Konfigurasikan pengaturan LSCache untuk meningkatkan kinerja.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'Kelola aplikasi LiteSpeed Cache dan pengaturan terkait.',
                    'title' => 'Konfigurasi',

                    'cache-application' => [
                        'info'             => 'Atur opsi aplikasi cache.',
                        'title'            => 'Aplikasi Cache',
                        'title-info'       => 'Konfigurasikan pengaturan aplikasi cache.',
                        'status'           => 'Status',
                        'default-ttl'      => 'TTL Default (Time To Live)',
                        'default-ttl-info' => 'Atur waktu hidup (TTL) default untuk item yang di-cache dalam satuan detik <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[Info Lebih Lanjut]</a>.',
                        'guest-only'       => 'Hanya Tamu',
                        'guest-only-info'  => 'Aktifkan caching hanya untuk pengguna tamu. Jika dinonaktifkan, caching akan diterapkan untuk semua pengguna.',
                    ],
                ],
            ],
        ],
    ],
];
