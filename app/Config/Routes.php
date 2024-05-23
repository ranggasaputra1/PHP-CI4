<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'dashboardController::index');

$routes->get('/home', 'home::index');