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

Route::get('/', 'HomeController@index');
Route::get('/inicio', 'MainController@index');
Route::post('/inicio/checklogin', 'MainController@checklogin');
Route::get('inicio/successlogin', 'MainController@successlogin');
Route::get('inicio/logout', 'MainController@logout');

/*Route::group(['middleware' => ['auth','no-cache']], function () {
  Route::get('/main','MainController@index');
  Route::get('inicio', 'HomeController@index');

});*/