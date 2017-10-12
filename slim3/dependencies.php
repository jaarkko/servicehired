<?php
// DIC configuration

use App\Controller\ServiceController;

$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {

    $cache = (getenv('AMAZEEIO_SITE_ENVIRONMENT')) ? false : 'sites/default/files/twig';

    $view = new \Slim\Views\Twig('slim3/templates', [
        'cache' => $cache,
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

// database connection
$container['db'] = function ($c) {
    $db = $c->get('settings')['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'], $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

// API Controller
$container['App\Controller\ServiceController'] = function ($c) {
    return new ServiceController($c->get('db'), $c->get('view'));
};
