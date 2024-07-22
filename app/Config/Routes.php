<?php

namespace Config;

use App\Controllers\usuario_controller;

$routers =  Services::routes();

$routers->setDefaultNamespace('App\Controllers');
$routers->setDefaultController('Home');
$routers->setDefaultMethod('index');
$routers->setTranslateURIDashes(false);
$routers->set404Override();


$routes->get('/', 'Home::Index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('Más', 'Home::Más');
$routes->get('Cuentos', 'Home::Cuentos');
$routes->get('Juego', 'Home::Juego');

/*rutas del registro*/
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/*rutas del login*/
$routes->get('/login', 'Login_controller');
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
