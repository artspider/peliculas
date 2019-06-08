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
    return "hola mundo de lumen";
});

/***************************************************************
  http://peliculas.test/users
  Nos envía al método =index= del controlador =UsersController=
 ***************************************************************/
$router->get('users', 'UsersController@index');

/*********************************************************************
  http://peliculas.test/users/{id}
  Nos envía al método =showOneUser= del controlador =UsersController=
 *********************************************************************/
$router->get('users/{id}', 'UsersController@showOneUser');