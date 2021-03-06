<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => true, // Allow the web server to send the content-length header
        'debug' => true,

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '../templates/',
        ],

        // Twig View settings
        'view' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::ERROR,
        ],
    ],
];
