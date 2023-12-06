<?php

use App\Controllers\Todo;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/todo', [Todo::class, 'index']);
$routes->get('/done', [Todo::class, 'done']);
$routes->get('/todo/new', [Todo::class, 'new']);
$routes->post('/todo', [Todo::class, 'create']);
$routes->post('/todo/update', [Todo::class, 'updateStatus']);
