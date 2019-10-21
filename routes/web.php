<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'home';
});

Route::get('/usuarios', 'UserController@index');
// para crear un detalle de usuario y retornar la misma variable podemos hacer una condicional para poder ingresar solo numeros
// tambien podemos cambiar el orden ya que los lee como el css
Route::get('/usuarios/{id}', 'UserController@show')->where("id", "[0-9]+");

Route::get('/usuarios/crear', 'UserController@create');

//podemos hacer validaciones y preguntar si alguna variables existe 
Route::get('/saludo/{nick}/{apodo?}', 'WelcomeController');
