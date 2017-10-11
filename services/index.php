<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'slim3/vendor/autoload.php';

$app = new \Slim\App;

$app->get('/services', function (Request $request, Response $response) {

  $response->getBody()->write("Hello world");

  return $response;
});

$app->get('/services/{country}', function (Request $request, Response $response) {
  $name = $request->getAttribute('country');
  $response->getBody()->write("Hello, $name");

  return $response;
});

$app->get('/services/{country}/{city}', function (Request $request, Response $response) {
  $name = $request->getAttribute('country');
  $city = $request->getAttribute('city');
  $response->getBody()->write("Hello, $city, $name");

  return $response;
});

$app->get('/services/{country}/{city}/{service}', function (Request $request, Response $response) {
  $name = $request->getAttribute('country');
  $city = $request->getAttribute('city');
  $service = $request->getAttribute('service');
  $response->getBody()->write("Service $service in $city, $name");

  return $response;
});

$app->run();
