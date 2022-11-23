<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->group("api", static function ($routes) {
//   // $routes->group("admin", static function ($routes) {
//   $routes->get("test", "API::api");
//   // });
// });

$routes->get("/", "Home::getIndex");
$routes->get("/login", "Home::getLogin");
$routes->get("/register", "Home::getRegister");
$routes->get("/forgotpass", "Home::getForgotpass");
$routes->get("/resetpass", "Home::getResetpass");
$routes->get("/logout", "Home::logout");

$routes->get("/checkout", "Shopping::getCheckout");
$routes->post("/checkout", "Shopping::postCheckout");

$routes->get("order/(:num)", "Shopping::orderDetails/$1");
$routes->get("order/disburse/(:num)", "Shopping::disburseOrder/$1");
$routes->get("order/deliver/(:num)", "Shopping::deliverOrder/$1");

$routes->post("/login", "Home::postLogin");
$routes->post("/register", "Home::postRegister");



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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
