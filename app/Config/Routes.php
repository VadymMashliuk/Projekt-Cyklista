<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Home::roky');
$routes->get('hlavniStranka/(:num)', 'Home::hlavniStranka/$1');
$routes->get('pridaniZavodu', 'Home::pridaniZavodu');
$routes->post('ulozeniZavodu', 'Home::ulozeniZavodu');