<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'LoginController::index');

$routes->post('/login', 'LoginController::authenticate');

$routes->get('/home', 'Move::index');

$routes->get('/sell', 'Move::sell');

$routes->get('/hasil', 'Move::hasil');

$routes->get('/graph', 'Move::graph');

