<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/catalog', 'Home::catalog',['filter' => 'auth']);
$routes->get('/editAccount', 'Home::editAccount',['filter' => 'auth']);
$routes->get('/product/(:segment)', 'Home::product/$1',['filter' => 'auth']);
$routes->get('/order', 'Home::order',['filter' => 'auth']);
$routes->get('/checkout', 'Home::checkout',['filter' => 'auth']);
$routes->get('/checkout2', 'Home::checkout2',['filter' => 'auth']);
$routes->get('/myOrder', 'Home::myOrder',['filter' => 'auth']);
$routes->get('/wishlist', 'Home::wishlist',['filter' => 'auth']);
$routes->get('/base_landing', 'Home::base_landing');
$routes->get('/login', 'Login::index');
$routes->get('logout','Login::logout');
$routes->match(['get','post'],'register', 'Login::register');
$routes->get('/landing','Home::landing_after_login',['filter' => 'auth']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
