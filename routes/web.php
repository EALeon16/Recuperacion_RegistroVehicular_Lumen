<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix'=>'alquilerVehiculo'], function($router){
    $router->get('/getAll','AlquilerControler@getAll');
   

    
});


$router->group(['prefix'=>'usuario'], function($router){
    $router->post('/crearUsuario','PersonaController@crearPersona');
    $router->post('/ingresar','UserController@login');
    $router->post('/alquilar/{cedula}','RegistrarAController@registrarAlquiler');
   

    
});
