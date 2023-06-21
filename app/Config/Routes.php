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
$routes->set404Override('/eror');
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//sebelum login
$routes->get('/', 'LandingPage::index');
$routes->get('/login', 'Home::login');
$routes->post('/login/process', 'Login::process');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::signingUp');

//Admin
$routes->get('/AdminDashboard', 'AdminDashboard::AdminDashboard');
$routes->get('/PKHLolosPTN', 'AdminLolosptn::index');
$routes->get('/PKHLolosPTN/detail/(:num)', 'AdminLolosPTN::detail/$1');
$routes->get('/PKHLolosPTN/delete/(:num)', 'AdminLolosPTN::delete/$1');
$routes->post('/PKHLolosPTN/import', 'AdminLolosPTN::import');
$routes->get('/PKHLolosPTN/export', 'AdminLolosPTN::export');
$routes->get('/PKHLolosPTN/clearall', 'AdminLolosPTN::clearall');
$routes->get('/PKHLolosPTN/edit', 'AdminLolosPTN::edit');
$routes->get('/PKHLolosPTN/edit/(:num)', 'AdminLolosPTN::edit/$1');
$routes->post('/PKHLolosPTN/update/(:num)', 'AdminLolosPTN::update/$1');
// $routes->get('/PKHLolosPTN/Detail', 'AdminLolosptn::detail');
// $routes->get('/PKHLolosPTN/Edit', 'AdminLolosptn::edit');



//siswa
$routes->get('/SiswaDashboard', 'SiswaDashboard::index');
$routes->get('/Biodata', 'SiswaBiodata::index');
$routes->post('/StoreBiodata', 'SiswaBiodata::store');
$routes->get('/BiodataDetail/(:num)', 'SiswaBiodata::detail/$1');
$routes->get('/DataUniversitas', 'SiswaDataUniv::index');
$routes->post('/StoreDataUniversitas', 'SiswaDataUniv::storeuniv');
$routes->get('/UniversitasDetail/(:num)', 'SiswaDataUniv::detail/$1');
$routes->get('/Prestasi', 'SiswaPrestasi::index');
$routes->post('/StorePrestasi', 'SiswaPrestasi::storeprestasi');
$routes->get('/UploadDokumen', 'SiswaUpload::index');
$routes->post('/StoreDokumen', 'SiswaUpload::storeup');


//LandingPage
$routes->get('/LandingPage', 'LandingPage::LandingPage');




// ----------------------------------------------------------

// $routes->get('/dashboard', 'Dashboard::index');


$routes->get('/logout', 'Home::logout');
$routes->get('/eror', 'Home::eror');






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
