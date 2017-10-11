<?php

require 'slim3/vendor/autoload.php';

$app = new \Slim\App;

// Instantiate the app
$settings = require 'slim3/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require 'slim3/dependencies.php';

// Register routes
require 'slim3/routes.php';

$app->run();
