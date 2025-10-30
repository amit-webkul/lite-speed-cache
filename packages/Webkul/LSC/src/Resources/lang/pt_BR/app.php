<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'Configure as opções do LSCache para melhorar o desempenho.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'Gerencie a aplicação LiteSpeed Cache e as configurações relacionadas.',
                    'title' => 'Configuração',

                    'cache-application' => [
                        'info'             => 'Defina as opções da aplicação de cache.',
                        'title'            => 'Aplicação de Cache',
                        'title-info'       => 'Configure as configurações da aplicação de cache.',
                        'status'           => 'Status',
                        'default-ttl'      => 'TTL Padrão (Tempo de Vida)',
                        'default-ttl-info' => 'Defina o tempo de vida padrão (em segundos) para itens em cache <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[Mais informações]</a>.',
                        'guest-only'       => 'Somente visitantes',
                        'guest-only-info'  => 'Habilitar cache apenas para usuários não autenticados. Se desativado, o cache será aplicado a todos os usuários.',
                    ],
                ],
            ],
        ],
    ],
];