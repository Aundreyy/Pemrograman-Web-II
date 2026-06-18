<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->post('/auth/loginAuth', 'Auth::loginAuth');
$routes->get('/logout', 'Auth::logout');
$routes->group('', ['filter' => 'authFilter'], static function ($routes) {
    $routes->get('/buku', 'Buku::index');
    $routes->get('/buku/create', 'Buku::create');
    $routes->post('/buku/store', 'Buku::store');
    $routes->get('/buku/edit/(:num)', 'Buku::edit/$1');
    $routes->post('/buku/update/(:num)', 'Buku::update/$1');
    $routes->delete('/buku/(:num)', 'Buku::delete/$1');
});