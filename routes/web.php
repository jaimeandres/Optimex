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

Route::get('/', 'WelcomeController@index');
//Route::get('/inicio', 'HomeController@index');

Route::group(['middleware' => ['auth','no-cache']], function () {
  Route::get('inicio', 'HomeController@index');
  Route::resource('usuarios', 'UsuarioController');
  Route::resource('productos', 'ProductoController');
  Route::resource('relacion', 'RelacionController');
  Route::post('/relacion/create', 'RelacionController@store_relacion');
});
Auth::routes();

