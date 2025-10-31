<?php

return [
    'configuration' => [
        'index' => [
            'lsc' => [
                'info'  => 'बेहतर प्रदर्शन के लिए LSCache सेटिंग्स कॉन्फ़िगर करें।',
                'title' => 'LiteSpeed कैश',

                'configuration' => [
                    'info'  => 'LiteSpeed Cache एप्लिकेशन और संबंधित सेटिंग्स प्रबंधित करें।',
                    'title' => 'कॉन्फ़िगरेशन',

                    'cache-application' => [
                        'info'             => 'कैश एप्लिकेशन विकल्प सेट करें।',
                        'title'            => 'कैश एप्लिकेशन',
                        'title-info'       => 'कैश एप्लिकेशन सेटिंग्स कॉन्फ़िगर करें।',
                        'status'           => 'स्थिति',
                        'default-ttl'      => 'डिफ़ॉल्ट TTL (टाइम टू लाइव)',
                        'default-ttl-info' => 'कॅश किए गए आइटमों के लिए डिफ़ॉल्ट जीवनकाल (सेकंड में) सेट करें <a href="https://docs.litespeedtech.com/lscache/lsclaravel/settings/#cache-control">[अधिक जानकारी]</a>.',
                        'guest-only'       => 'केवल अतिथि',
                        'guest-only-info'  => 'केवल अतिथि उपयोगकर्ताओं के लिए कैशिंग सक्षम करें। यदि अक्षम किया गया है, तो कैशिंग सभी उपयोगकर्ताओं पर लागू होगी।',
                    ],
                ],
            ],
        ],
    ],
];
