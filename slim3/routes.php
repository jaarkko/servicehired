<?php

use App\Controller\ServiceController;

$app->get(
    '/services',
    ServiceController::class .':countries'
)->setName('countries');

$app->get(
    '/services/{country}',
    ServiceController::class .':citiesByCountry'
)->setName('country');

$app->get(
    '/services/{country}/{city}',
    ServiceController::class .':categories'
)->setName('city');

$app->get(
    '/services/{country}/{city}/{category}',
    ServiceController::class .':services'
)->setName('services');
