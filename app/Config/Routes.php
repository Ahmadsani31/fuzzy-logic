<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->post('fuzzy', 'Fuzzy::index');
$routes->get('perhitungan', 'Perhitungan::index');
$routes->get('perhitungan/detail/(:num)', 'Perhitungan::detail/$1');
