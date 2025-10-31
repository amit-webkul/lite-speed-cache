<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'Configura le impostazioni di LSCache per migliorare le prestazioni.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'Gestisci l\'applicazione LiteSpeed Cache e le impostazioni correlate.',
                    'title' => 'Configurazione',

                    'cache-application' => [
                        'info'             => 'Imposta le opzioni dell\'applicazione cache.',
                        'title'            => 'Applicazione cache',
                        'title-info'       => 'Configura le impostazioni dell\'applicazione cache.',
                        'status'           => 'Stato',
                        'default-ttl'      => 'TTL predefinito (Time To Live)',
                        'default-ttl-info' => 'Imposta il tempo di vita predefinito per gli elementi memorizzati nella cache in secondi <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[Maggiori informazioni]</a>.',
                        'guest-only'       => 'Solo ospiti',
                        'guest-only-info'  => 'Abilita la memorizzazione nella cache solo per gli utenti ospiti. Se disabilitata, la cache verrà applicata a tutti gli utenti.',
                    ],
                ],
            ],
        ],
    ],
];
