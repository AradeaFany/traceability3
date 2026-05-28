<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Auth::login');
$routes->get(
'/dashboard',
'Dashboard::index'
);
$routes->get(
'/register',
'User::register'
);

$routes->post(
'/saveuser',
'User::save'
);
$routes->get(
'/user',
'User::index'
);

$routes->get(
'/user/tambah',
'User::tambah'
);

$routes->post(
'/saveuser',
'User::save'
);

$routes->get(
'/edituser/(:num)',
'User::edit/$1'
);

$routes->post(
'/updateuser/(:num)',
'User::update/$1'
);

$routes->get(
'/hapususer/(:num)',
'User::hapus/$1'
);

$routes->get(
'/login',
'Auth::login'
);

$routes->post(
'/ceklogin',
'Auth::cekLogin'
);

$routes->get(
'/dashboard',
'Dashboard::index'
);

$routes->get(
'/logout',
'Auth::logout'
);

//produk
$routes->get(
'/produk',
'Produk::index'
);

$routes->get(
'/produk/tambah',
'Produk::tambah'
);


$routes->post(
'/saveproduk',
'Produk::save'
);


$routes->get(
'/hapusproduk/(:num)',
'Produk::delete/$1'
);

$routes->get(

'/editproduk/(:num)',

'Produk::edit/$1'

);

$routes->post(

'/updateproduk/(:num)',

'Produk::update/$1'

);

//BATCH
$routes->get(
'/batch',
'Batch::index'
);

$routes->get(
'/batch/tambah',
'Batch::tambah'
);

$routes->post(
'/savebatch',
'Batch::save'
);

$routes->get(
'/editbatch/(:num)',
'Batch::edit/$1'
);

$routes->post(
'/updatebatch/(:num)',
'Batch::update/$1'
);

$routes->get(
'/hapusbatch/(:num)',
'Batch::delete/$1'
);

//PROSES
$routes->get(
'/proses',
'Proses::index'
);
$routes->get(
'/proses',
'Proses::index'
);

$routes->get(
'/proses/tambah',
'Proses::tambah'
);

$routes->post(
'/saveproses',
'Proses::save'
);

$routes->get(
'/hapusproses/(:num)',
'Proses::hapus/$1'
);
$routes->get(
'/editproses/(:num)',
'Proses::edit/$1'
);

$routes->post(
'/updateproses/(:num)',
'Proses::update/$1'
);

//TREACIBILLITY
$routes->get(
'/traceability',
'Traceability::index'
);

$routes->get(
'/tracking/(:num)',
'Traceability::detail/$1'
);

$routes->get(
'/qrcode/(:num)',
'Traceability::qrcode/$1'
);