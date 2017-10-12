<?php

// Load Drupal settings
include 'sites/default/settings.php';

// Drupal default DB
$db_config = $databases['default']['default'];

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        'db' => [
            'host' => $db_config['host'],
            'dbname' => $db_config['database'],
            'user' => $db_config['username'],
            'pass' => $db_config['password'],
        ],

    ],
];
