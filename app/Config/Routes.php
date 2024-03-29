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

// ROUTES MAIN WEBSITE
$routes->get('/', 'Home::index');
$routes->get('/sw_catalog', 'Home::sw_catalog',['filter' => 'auth']);
$routes->get('/fw_catalog', 'Home::fw_catalog',['filter' => 'auth']);
$routes->get('/editAccount', 'Home::editAccount',['filter' => 'auth']);
$routes->get('/editAccount/update', 'EditAccount::update',['filter' => 'auth']);
$routes->get('/product/(:segment)', 'Home::product/$1',['filter' => 'auth']);
$routes->get('/order/(:segment)', 'Home::order/$1',['filter' => 'auth']);
$routes->get('/checkout/(:segment)', 'Home::checkout/$1',['filter' => 'auth']);
$routes->post('/checkout/save', 'FishData::saveTransaction',['filter' => 'auth']);
$routes->get('/checkout/pendingTransaction/(:num)', 'FishData::pendingTransaction/$1',['filter' => 'auth']);
$routes->post('/checkout/update', 'FishData::updateTransaction',['filter' => 'auth']);
$routes->get('/wishlist', 'Home::wishlist',['filter' => 'auth']);
$routes->get('/wishlist/(:segment)', 'FishData::saveWishlist/$1',['filter' => 'auth']);
$routes->get('/wishlist/delete/(:segment)', 'FishData::deleteWishlist/$1',['filter' => 'auth']);
$routes->get('/myOrder', 'Home::myOrder',['filter' => 'auth']);
$routes->get('/myOrder/deleteTransaction/(:num)', 'FishData::deleteTransaction/$1',['filter' => 'auth']);
$routes->get('/myOrder/(:segment)', 'FishData::saveCart/$1',['filter' => 'auth']);
$routes->get('/myOrder/deleteCart/(:segment)', 'FishData::deleteCart/$1',['filter' => 'auth']);
$routes->get('/detail_order/(:num)', 'Home::detail_order/$1', ['filter' => 'auth']);
$routes->get('/base_landing', 'Home::base_landing');
$routes->get('/login', 'Login::index');
$routes->get('logout','Login::logout');
$routes->match(['get','post'],'register', 'Login::register');
$routes->get('/landing','Home::landing_after_login',['filter' => 'auth']);

// ROUTES ADMIN MODE
$routes->get('/admin', 'Admin::admin_home');
$routes->get('/admin/selectUser', 'Admin::admin_select_user');
$routes->get('/admin/transaction/edit/(:num)', 'Admin::admin_transaction_edit/$1');

$routes->get('/admin/users', 'Admin::admin_users');
$routes->get('/admin/users/add', 'Admin::admin_users_add');
$routes->get('admin/admin/users/edit/(:num)', 'Admin::admin_users_edit/$1');
$routes->post('/admin/users/update', 'AdminCRUD::Users_update');
$routes->get('admin/admin/users/delete/(:num)', 'AdminCRUD::Users_delete/$1');

$routes->get('/admin/fish', 'Admin::admin_fish');
$routes->get('/admin/fish/add', 'Admin::admin_fish_add');
$routes->get('/admin/fish/(:segment)', 'Admin::admin_fish_detail/$1');
$routes->get('/admin/fishDetail/edit/(:segment)', 'Admin::admin_fishDetail_edit/$1');
$routes->post('/admin/fishDetail/update', 'AdminCRUD::FishDetail_update');
$routes->get('/admin/fishDetail/delete/(:segment)', 'AdminCRUD::FishDetail_delete/$1');

$routes->get('/admin/paymentDb', 'Admin::admin_paymentDb');
$routes->get('/admin/paymentDb/add', 'Admin::admin_paymentDb_add');
$routes->get('/admin/paymentDb/edit/(:num)', 'Admin::admin_paymentDb_edit/$1');
$routes->post('/admin/paymentDb/update', 'AdminCRUD::PaymentDb_update');
$routes->get('/admin/paymentDb/delete/(:num)', 'AdminCRUD::PaymentDb_delete/$1');

$routes->get('/admin/seller', 'Admin::admin_seller');
$routes->get('/admin/seller/add', 'Admin::admin_seller_add');
$routes->get('/admin/seller/edit/(:segment)', 'Admin::admin_seller_edit/$1');
$routes->post('/admin/seller/update', 'AdminCRUD::Seller_update');
$routes->get('/admin/seller/delete/(:segment)', 'AdminCRUD::Seller_delete/$1');

$routes->get('/admin/cart', 'Admin::admin_cart');
$routes->get('/admin/wishlist', 'Admin::admin_wishlist');
$routes->get('/admin/transaction/(:num)', 'Admin::admin_transaction/$1');
$routes->get('/admin/postCode', 'Admin::admin_postCode');

$routes->get('/admin/voucher', 'Admin::admin_voucher');
$routes->get('/admin/voucher/add', 'Admin::admin_voucher_add');
$routes->get('/admin/voucher/edit/(:num)', 'Admin::admin_voucher_edit/$1');
$routes->post('/admin/voucher/update', 'AdminCRUD::Voucher_update');
$routes->get('/admin/voucher/delete/(:num)', 'AdminCRUD::Voucher_delete/$1');
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
