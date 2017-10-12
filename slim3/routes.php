<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/services', function (Request $request, Response $response) {
    return $this->view->render($response, 'index.html', [
        'uri' => $request->getUri(),
    ]);
});

$app->get('/services/{country}', function (Request $request, Response $response) {
    return $this->view->render($response, 'country.html', [
        'country' => $request->getAttribute('country'),
        'uri' => $request->getUri(),
    ]);
});

$app->get('/services/{country}/{city}', function (Request $request, Response $response) {
    return $this->view->render($response, 'city.html', [
        'country' => $request->getAttribute('country'),
        'city' => $request->getAttribute('city'),
        'uri' => $request->getUri(),
    ]);
});

$app->get('/services/{country}/{city}/{service}', function (Request $request, Response $response) {
    return $this->view->render($response, 'service.html', [
        'country' => $request->getAttribute('country'),
        'city' => $request->getAttribute('city'),
        'service' => $request->getAttribute('service'),
        'uri' => $request->getUri(),
    ]);
});
