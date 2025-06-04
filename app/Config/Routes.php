<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Home::hlavniStranka');
$routes->get('pridaniZavodu', 'Home::pridaniZavodu');
$routes->post('ulozeniZavodu', 'Home::ulozeniZavodu');