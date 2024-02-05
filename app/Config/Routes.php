<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('register', 'Home::register');
$routes->get('user', 'Home::user');

$routes->get('/admin', 'User::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'User::index', ['filter' => 'role:admin']);