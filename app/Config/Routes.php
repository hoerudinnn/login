<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('register', 'Home::register');
$routes->get('user', 'User::index');
$routes->get('admin', 'Admin::index');


$routes->get('/admin', 'User::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'User::index', ['filter' => 'role:admin']);