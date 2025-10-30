<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'LSCache සැකසුම් කාර්යක්ෂමතාව වැඩිදියුණු කිරීම සඳහා සකසන්න.',
                'title' => 'LiteSpeed Cache',

                'configuration' => [
                    'info'  => 'LiteSpeed Cache යෙදුම සහ සම්බන්ධිත සැකසුම් කළමනාකරණය කරන්න.',
                    'title' => 'සැකසුම්',

                    'cache-application' => [
                        'info'             => 'කෑෂ් යෙදුම් විකල්ප සකසන්න.',
                        'title'            => 'කෑෂ් යෙදුම',
                        'title-info'       => 'කෑෂ් යෙදුම් සැකසුම් සකසන්න.',
                        'status'           => 'තත්ත්වය',
                        'default-ttl'      => 'පෙරනිමි TTL (ජීවිත කාලය)',
                        'default-ttl-info' => 'සැම්මතව, තත්පර වලින් කෑෂ් කළ අයිතම සඳහා ජීවිත කාලය සකසන්න <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[වැඩි විස්තර]</a>.',
                        'guest-only'       => 'අමුත්තන් සඳහා පමණක්',
                        'guest-only-info'  => 'කෑෂ් කිරීම පමණක් අමුත්තන් සඳහා සක්‍රීය කරන්න. අක්‍රිය කළහොත්, කෑෂ් කිරීම සියලු පරිශීලකයන්ට යෙදේ.',
                    ],
                ],
            ],
        ],
    ],
];