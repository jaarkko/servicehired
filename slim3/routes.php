<?php

use App\Controller\ServiceController;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/*$app->get('/services', function (Request $request, Response $response) {
    return $this->view->render($response, 'index.html', [
        'uri' => $request->getUri(),
    ]);
});*/

$app->get(
    '/services',
    ServiceController::class .':countries'
)->setName('countries');

$app->get(
    '/services/{country}',
    ServiceController::class .':citiesByCountry'
)->setName('country');

/*$app->get('/services/{country}/{city}', function (Request $request, Response $response) {
    return $this->view->render($response, 'city.html', [
        'country' => $request->getAttribute('country'),
        'city' => $request->getAttribute('city'),
        'uri' => $request->getUri(),
    ]);
})->setName('city');*/

$app->get(
    '/services/{country}/{city}',
    ServiceController::class .':categories'
)->setName('city');

$app->get(
    '/services/{country}/{city}/{category}',
    ServiceController::class .':services'
)->setName('services');
