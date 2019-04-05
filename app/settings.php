<?php

return [
    'settings' => [
        'view' => [
            'path' => __DIR__ . '/./views',
        ],
        'displayErrorDetails' => true,
    ],
    'scripts' => [
        'jquery' => false,
        'babel' => true,
        'vue' => true,
        'react' => false,
        'other' => [
            '/js/script.js',
            // e.g. 
            // '/js/another-script.js'
            // or
            // 'https://unpkg.com/lodash@4.17.11/lodash.js',
        ]
    ]
];