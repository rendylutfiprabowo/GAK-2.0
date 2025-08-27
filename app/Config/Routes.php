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
// $routes->set404Override('/eror');
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
$routes->get('/eror', 'Home::eror');

$routes->get('/', 'LandingPage::index');
$routes->get('/login', 'Home::login');
$routes->post('/login/process', 'Login::process');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::signingUp');

//Admin
// $routes->get('/AdminDashboard', 'AdminDashboard::index', ['filter' => 'auth:0']); // hanya admin
// $routes->get('/SiswaDashboard', 'SiswaDashboard::index', ['filter' => 'auth:1']); // hanya siswa

$routes->get('/AdminDashboard', 'AdminDashboard::AdminDashboard', ['filter' => 'auth:0']);
$routes->get('/PKHLolosPTN', 'AdminLolosptn::index', ['filter' => 'auth:0']);
$routes->get('/PKHLolosPTN/detail/(:num)', 'AdminLolosptn::detail/$1', ['filter' => 'auth:0']);
$routes->get('/PKHLolosPTN/delete/(:num)', 'AdminLolosptn::delete/$1', ['filter' => 'auth:0']);
$routes->post('/PKHLolosPTN/import', 'AdminLolosptn::import', ['filter' => 'auth:0']);
$routes->get('/PKHLolosPTN/export', 'AdminLolosptn::export', ['filter' => 'auth:0']);
$routes->get('/PKHLolosPTN/clearall', 'AdminLolosptn::clearall', ['filter' => 'auth:0']);
$routes->get('/PKHLolosPTN/edit', 'AdminLolosptn::edit', ['filter' => 'auth:0']);
$routes->get('/PKHLolosPTN/edit/(:num)', 'AdminLolosptn::edit/$1', ['filter' => 'auth:0']);
$routes->post('/PKHLolosPTN/edit/storeAddPrestasi/(:num)', 'AdminLolosptn::storeAddPrestasi/$1', ['filter' => 'auth:0']);
$routes->get('PKHLolosPTN/edit/deletePrestasi/(:num)', 'AdminLolosptn::deletePrestasi/$1', ['filter' => 'auth:0']);
$routes->post('/PKHLolosPTN/update/(:num)', 'AdminLolosptn::update/$1', ['filter' => 'auth:0']);
$routes->post('/PKHLolosPTN/updatePrestasi/(:num)', 'AdminLolosptn::updatePrestasi/$1', ['filter' => 'auth:0']);
$routes->post('/PendampingPKH', 'AdminPendampingPKH::index', ['filter' => 'auth:0']);
$routes->get('/getKecamatan/(:num)', 'AdminLolosptn::getKecamatan/$1');
$routes->get('/getDesa/(:num)', 'AdminLolosptn::getDesa/$1');
$routes->get('/MasterData', 'MasterData::index', ['filter' => 'auth:0']);

$routes->post('/masterdata/desa/store', 'MasterData::desaStore');
$routes->get('/masterdata/getKecamatan/(:num)', 'MasterData::getKecamatan/$1');

$routes->post('/masterdata/desa/update/(:num)', 'MasterData::desaUpdate/$1');
$routes->get('/masterdata/desa/Delete/(:num)', 'MasterData::desaDelete/$1');
$routes->post('/masterdata/jalurMasuk/store', 'MasterData::jalurMasukstore');
$routes->post('/masterdata/jalurMasuk/update/(:num)', 'MasterData::jalurMasukUpdate/$1');
$routes->get('/masterdata/jalurMasuk/Delete/(:num)', 'MasterData::jalurMasukDelete/$1');
$routes->post('/masterdata/kabupaten/store', 'MasterData::kabupatenStore');
$routes->post('/masterdata/kabupaten/update/(:num)', 'MasterData::kabupatenUpdate/$1');
$routes->get('/masterdata/kabupaten/Delete/(:num)', 'MasterData::kabupatenDelete/$1');
$routes->post('/masterdata/prodi/store', 'MasterData::prodiStore');
$routes->post('/masterdata/prodi/update/(:num)', 'MasterData::prodiUpdate/$1');
$routes->get('/masterdata/prodi/Delete/(:num)', 'MasterData::prodiDelete/$1');
$routes->post('/masterdata/SMA/store', 'MasterData::SMAStore');
$routes->post('/masterdata/SMA/update/(:num)', 'MasterData::SMAUpdate/$1');
$routes->get('/masterdata/SMA/Delete/(:num)', 'MasterData::SMADelete/$1');
$routes->post('/masterdata/daftaruniversitas/store', 'MasterData::daftaruniversitasStore');
$routes->post('/masterdata/daftaruniversitas/update/(:num)', 'MasterData::daftaruniversitasUpdate/$1');
$routes->get('/masterdata/daftaruniversitas/Delete/(:num)', 'MasterData::daftaruniversitasDelete/$1');
$routes->post('/masterdata/kecamatan/store', 'MasterData::kecamatanStore');
$routes->post('/masterdata/kecamatan/update/(:num)', 'MasterData::kecamatanUpdate/$1');
$routes->get('/masterdata/kecamatan/Delete/(:num)', 'MasterData::kecamatanDelete/$1');
$routes->post('/masterdata/pendampingpkh/store', 'MasterData::pendampingpkhStore');
$routes->post('/masterdata/pendampingpkh/update/(:num)', 'MasterData::pendampingpkhUpdate/$1');
$routes->get('/masterdata/pendampingpkh/Delete/(:num)', 'MasterData::pendampingpkhDelete/$1');


//siswa
$routes->get('/SiswaDashboard', 'SiswaDashboard::index', ['filter' => 'auth:1']);

$routes->get('/Biodata', 'SiswaBiodata::index', ['filter' => 'auth:1']);
$routes->get('/Biodata/Edit', 'SiswaBiodata::edit', ['filter' => 'auth:1']);
$routes->post('/Biodata/Edit/GetKecamatan', 'SiswaBiodata::getKecamatan', ['filter' => 'auth:1']);
$routes->post('/Biodata/Edit/GetDesa', 'SiswaBiodata::getDesa', ['filter' => 'auth:1']);
$routes->post('/Biodata/Edit/Store', 'SiswaBiodata::store', ['filter' => 'auth:1']);
$routes->get('/wilayah/kecamatan/(:num)', 'WilayahController::getKecamatanByKabupaten/$1', ['filter' => 'auth:1']);
$routes->get('/wilayah/desa/(:num)', 'WilayahController::getDesaByKecamatan/$1', ['filter' => 'auth:1']);


$routes->get('/DataUniversitas', 'SiswaDataUniv::index', ['filter' => 'auth:1']);
$routes->get('/DataUniversitas/Edit', 'SiswaDataUniv::edit', ['filter' => 'auth:1']);
$routes->post('/DataUniversitas/Edit/Store', 'SiswaDataUniv::storeuniv', ['filter' => 'auth:1']);

$routes->get('/Prestasi', 'SiswaPrestasi::index', ['filter' => 'auth:1']);
$routes->get('/Prestasi/Add', 'SiswaPrestasi::add', ['filter' => 'auth:1']);
$routes->post('/Prestasi/Add/Store', 'SiswaPrestasi::storeprestasi', ['filter' => 'auth:1']);
$routes->get('/Prestasi/Edit/(:num)', 'SiswaPrestasi::edit/$1', ['filter' => 'auth:1']);
$routes->post('/Prestasi/Edit/Update/(:num)', 'SiswaPrestasi::update/$1', ['filter' => 'auth:1']);
$routes->get('/Prestasi/Delete/(:num)', 'SiswaPrestasi::delete/$1', ['filter' => 'auth:1']);

$routes->get('/UploadDokumen', 'SiswaUpload::index', ['filter' => 'auth:1']);
$routes->post('/StoreDokumen', 'SiswaUpload::storeup', ['filter' => 'auth:1']);


//LandingPage
$routes->get('/LandingPage', 'LandingPage::LandingPage');




// ----------------------------------------------------------

// $routes->get('/dashboard', 'Dashboard::index');


$routes->get('/logout', 'Home::logout');






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
