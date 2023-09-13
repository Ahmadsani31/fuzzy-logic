<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->post('fuzzy', 'Fuzzy::index');
$routes->get('perhitungan', 'Perhitungan::index');
$routes->get('admin', 'Fuzzyfication::index');
$routes->get('admin/fuzzyfication/tambah/(:num)', 'Fuzzyfication::tambah/$1');
$routes->get('admin/fuzzyfication/delete/(:num)', 'Fuzzyfication::delete/$1');
$routes->post('admin/fuzzyfication/simpan', 'Fuzzyfication::simpan');
$routes->get('perhitungan/detail/(:num)', 'Perhitungan::detail/$1');
