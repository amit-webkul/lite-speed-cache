<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'Configurer les paramètres de LSCache pour améliorer les performances.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'Gérer l\'application LiteSpeed Cache et les paramètres associés.',
                    'title' => 'Configuration',

                    'cache-application' => [
                        'info'             => 'Définir les options de l\'application de cache.',
                        'title'            => 'Application de cache',
                        'title-info'       => 'Configurez les paramètres de l\'application de cache.',
                        'status'           => 'Statut',
                        'default-ttl'      => 'TTL par défaut (Durée de vie)',
                        'default-ttl-info' => 'Définissez le temps de vie par défaut des éléments mis en cache en secondes <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[Plus d\'infos]</a>.',
                        'guest-only'       => 'Uniquement pour les invités',
                        'guest-only-info'  => 'Activez la mise en cache uniquement pour les utilisateurs invités. Si désactivé, la mise en cache sera appliquée à tous les utilisateurs.',
                    ],
                ],
            ],
        ],
    ],
];
