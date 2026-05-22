<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get(
'/register',
'User::register'
);

$routes->post(
'/saveuser',
'User::save'
);


$routes->get(
'/login',
'Auth::login'
);

$routes->get(
'/logout',
'Auth::logout'
);