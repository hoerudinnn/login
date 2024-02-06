<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('register', 'Home::register');
$routes->get('user', 'User::index');
$routes->get('admin', 'Admin::index');
$routes->get('mata-kuliah', 'Matkul::index');
$routes->get('add-kuliah', 'Matkul::addKuliah');


$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);