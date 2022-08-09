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
$routes->setDefaultController('LoginController');
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
$routes->get('/', 'Home::index', ['as'=>'home']);
$routes->get('/index', 'LoginController::index', ['as'=>'inicio']);
$routes->get('/dulci', 'Dulci::index', ['as'=>'dulci']);
$routes->get('/marcas', 'Marcas::index', ['as'=>'marcas']);


$routes->post('validar', 'LoginController::validar');
$routes->get('/registro','LoginController::registro',['as'=>'registro']);
// $routes->get('/dashboard','Dashboard::index',['as'=>'dashboard']);
$routes->get('/recuperar','LoginController::recuperar',['as'=>'recuperar']);
$routes->get('/logout','LoginController::logout',['as'=>'logout']);
$routes->get('/clear', 'DbController::clear');
$routes -> post('guardar_usuario','Usuario::guardar');

$routes->group('admin', ['filter'=>'sesion'], function ($routes){
  $routes -> get('dashboard','Dashboard::index',['as'=>'dashboard']);
  $routes -> get('dulce','Dulce::index',['as'=>'dulce']);
  $routes -> get('dulces','Dulce::dulces',['as'=>'dulces']);
  $routes -> post('guardar_usuario','Usuario::guardar');
  $routes -> post('actualizar_usuario','Usuario::actualizar');
  $routes -> post('eliminar_usuario','Usuario::eliminar');
  $routes -> post('guardar_dulce','Dulce::guardar');
  $routes -> post('actualizar_dulce','Dulce::actualizar');
  $routes -> post('eliminar_dulce','Dulce::eliminar');
  $routes->get('buscar_dulce/(:alpha)', 'Dulce::buscar_dulce/$1');
  $routes -> post('guardar_venta','Ventas::guardar_venta');

});


/*
 * ----------------------------------------------------------------
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
