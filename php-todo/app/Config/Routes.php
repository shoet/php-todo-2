<?php

use App\Controllers\Todo;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/todo', [Todo::class, 'index']);
$routes->get('/todo/new', [Todo::class, 'new']);
