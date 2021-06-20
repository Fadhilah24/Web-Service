<?php
use Illuminate\Http\Request;
/** @var \Laravel\Lumen\Routing\Router $router */

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
	$router->get('/kolam/input','RegistrasikolamController@input');
	$router->post("/register", "RegisterController@register");
	$router->post("/login", "AuthController@login");
	$router->get("/user", "UserController@index");
	$router->get("/regus", "RegisterController@regus");
	$router->get('/kolam/daftar', 'ListkolamController@lists');
	$router->get('/', 'RegistrasikolamController@index');
    $router->post('/kolam/create', 'RegistrasikolamController@create');
    $router->get('/kolam/{id}', 'RegistrasikolamController@show');
    $router->put('/kolam/{id}', 'RegistrasikolamController@update');
    $router->delete('/kolam/{id}', 'RegistrasikolamController@destroy');


