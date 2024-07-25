<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/barang', 'BarangController::index');
$routes->get('/barang/create', 'BarangController::create');
$routes->post('/barang/store', 'BarangController::store');