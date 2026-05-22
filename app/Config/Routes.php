<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');

$routes->post('/ceklogin','Auth::cekLogin');

$routes->get('/logout','Auth::logout');
