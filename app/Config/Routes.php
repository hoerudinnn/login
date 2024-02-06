<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('register', 'Home::register');
$routes->get('user', 'User::index');
$routes->get('admin', 'Admin::index');
// $routes->get('mata-kuliah', 'Matkul::index');
// $routes->get('add-kuliah', 'Matkul::addKuliah');


$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);

$routes->get('akademik', 'Akademik::index');
// $routes->get('kegiatan-wawasan-akademik', 'Akademik::kegiatanWawasan');  // Sesuaikan dengan nama fungsi di kontroler
// $routes->get('beban-kerja-dosen', 'BebanKerjaDosenController::index');
// $routes->get('perwalian', 'PerwalianController::index');
// $routes->get('plp', 'PLPController::index');
// $routes->get('luaran', 'LuaranController::index');
// $routes->get('sdm', 'SDMController::index');
// $routes->get('sarana-prasarana', 'SaranaPrasaranaController::index');