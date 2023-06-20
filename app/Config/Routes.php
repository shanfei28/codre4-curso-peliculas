<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
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
//$routes->get('/', 'Home::index');
//$routes->get('/hola-mundo', 'Home::index');



$routes->presenter('pelicula');
$routes->presenter('categoria');


// $routes->get('/', 'Home::index');

// $routes->get('pelicula', 'Pelicula::index');
// $routes->get('pelicula/new', 'Pelicula::create');


// $routes->get('/new', 'Home::new');
// $routes->post('/create', 'Home::create');

// $routes->get('/edit/(:num)', 'Home::edit/$1');
// $routes->put('/update/(:num)', 'Home::edit/$1');

// $routes->delete('delete/(:num)', 'Home::delete/$1');

//$routes->presenter('home');  // se usas para html

//$routes->resource('home'); // se usa para API REST



//$routes->get('/update/(:any)/', 'Home::update/$1');





//http GET--> obtener informacion POST-->formulario para crear un recurso  PUT--> actulizar PATH-->actualizar DELETE --> eliminar

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
