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

Route::group(['middleware' => ['auth','no-cache']], function () {
  Route::get('inicio', 'HomeController@index');
  Route::resource('usuarios', 'UsuarioController');
  Route::resource('productos', 'ProductoController');
  Route::resource('relacion', 'RelacionController');
  Route::resource('inventario', 'AdministrativoController');
  Route::resource('estrategia', 'GerenteProductoController');
  Route::resource('historico', 'HistoricoController');
  
  Route::post('/usuarios/{id}/edit', 'UsuarioController@updates');
  Route::get('/usuarios/{id}/eliminar', 'UsuarioController@eliminar');

  Route::post('/productos/{id}/edit', 'ProductoController@updates');
  Route::get('/productos/{id}/eliminar', 'ProductoController@eliminar');

  Route::post('/relacion/create', 'RelacionController@store_relacion');
  Route::get('/relacion/{id}/consultar', 'RelacionController@mostrar');
  Route::get('/relacion/{id}/quitar', 'RelacionController@quitar');

  Route::get('/estrategia/{id}/editfija', 'GerenteProductoController@editfija');
  Route::post('/estrategia/{id}/edit', 'GerenteProductoController@update_estrategia');
  Route::post('/estrategia/{id}/editfija', 'GerenteProductoController@update_fija');
  Route::get('/estrategia/{id}/calculo', 'GerenteProductoController@calculo');

  Route::get('/historico/{id}/show', 'HistoricoController@mostrar');
});
Auth::routes();

