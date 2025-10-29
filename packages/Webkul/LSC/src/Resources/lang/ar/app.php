<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'قم بتكوين إعدادات LSCache لتحسين الأداء.',
                'title' => 'ذاكرة التخزين المؤقت LiteSpeed',

                'configuration' => [
                    'info'  => 'إدارة تطبيق LiteSpeed Cache والإعدادات ذات الصلة.',
                    'title' => 'التكوين',

                    'cache-application' => [
                        'info'             => 'تعيين خيارات تطبيق التخزين المؤقت.',
                        'title'            => 'تطبيق التخزين المؤقت',
                        'title-info'       => 'تكوين إعدادات تطبيق التخزين المؤقت.',
                        'status'           => 'الحالة',
                        'default-ttl'      => 'المدة الافتراضية (TTL)',
                        'default-ttl-info' => 'اضبط المدة الافتراضية لبقاء العناصر المخزنة مؤقتًا بالثواني <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[مزيد من المعلومات]</a>.',
                        'guest-only'       => 'للضيوف فقط',
                        'guest-only-info'  => 'قم بتمكين التخزين المؤقت للمستخدمين الضيوف فقط. إذا تم تعطيله، سيتم تطبيق التخزين المؤقت على جميع المستخدمين.',
                    ],
                ],
            ],
        ],
    ],
];