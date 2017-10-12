<?php

// Load Drupal settings
include 'sites/default/settings.php';

$db_config = [];

// Drupal default DB
if (isset($databases['default'])) {
    $db_config = $databases['default']['default'];
}

// Pantheon
if (defined('PANTHEON_ENVIRONMENT')) {
    $db_config = [
        'host' => getenv('DB_HOST'),
        'database' => getenv('DB_NAME'),
        'username' => getenv('DB_USER'),
        'password' => getenv('DB_PASSWORD'),
        'port' => getenv('DB_PORT'),
    ];
}

if (empty($db_config)) {
    die('No valid database settings available!');
}

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
            'port' => $db_config['port'],
        ],

    ],
];
