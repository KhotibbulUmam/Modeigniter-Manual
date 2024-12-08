<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes = objek router,
// get = metodo pengiriman data, 
// '/profil' = file profil.php
// 'home' = file Home.php yang berada di folder Controller
//  '::profil' =  method atau function yang berada di file Home.php  
$routes->get('/profil', 'Home::profil');
