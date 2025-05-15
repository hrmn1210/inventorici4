<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::login');

$routes->get('/admin/login-admin', 'Admin::login');
$routes->get('/admin/dashboard-admin', 'Admin::dashboard');
$routes->get('/data-kendaraan', 'Data_kendaraan::kendaraan');
$routes->get('/peminjaman', 'Peminjaman::peminjaman');
$routes->get('/pengembalian', 'Pengembalian::pengembalian');
$routes->get('/tambah-kendaraan', 'Data_kendaraan::tambah_kendaraan');

$routes->get('/data-properti', 'Data_properti::properti');
$routes->get('/tambah-properti', 'Data_properti::tambah_properti');

$routes->get('/data-elektronik', 'Data_elektronik::elektronik');
$routes->get('/tambah-elektronik', 'Data_elektronik::tambah_elektronik');
