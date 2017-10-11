<?php

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        'db' => [
            'host' => (isset($_SERVER['RDS_HOSTNAME']) ? $_SERVER['RDS_HOSTNAME'] : '172.16.44.194'),
            'dbname' => 'dcapp',
            'user' => (isset($_SERVER['RDS_USERNAME']) ? $_SERVER['RDS_USERNAME'] : 'dcapp'),
            'pass' => (isset($_SERVER['RDS_PASSWORD']) ? $_SERVER['RDS_PASSWORD'] : 'dcapp'),
        ],

    ],
];
