<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RelacionController;
use App\Http\Controllers\GerenteProductoController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\AdministrativoController;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//[WelcomeController::class, 'index']
Route::get('/', [WelcomeController::class, 'index']);
Route::get('reset', [ResetPasswordController::class, 'showResetForm']);
Route::post('reset', [ResetPasswordController::class, 'reset']);

Route::group(['middleware' => ['auth']], function () {
  Route::get('inicio', [HomeController::class, 'index']);
  Route::resource('usuarios', UsuarioController::class);
  Route::resource('productos', ProductoController::class);
  Route::resource('relacion', RelacionController::class);  
  Route::resource('estrategia', GerenteProductoController::class);
  Route::resource('historico', HistoricoController::class);
  Route::resource('inventario', AdministrativoController::class);  

  Route::post('/usuarios/{id}/edit', [UsuarioController::class, 'updates']);
  Route::get('/usuarios/{id}/eliminar', [UsuarioController::class, 'eliminar']);

  Route::post('/productos/{id}/edit', [ProductoController::class, 'updates']);
  Route::get('/productos/{id}/eliminar', [ProductoController::class, 'eliminar']);

  Route::post('/relacion/create', [RelacionController::class, 'store_relacion']);
  Route::get('/relacion/{id}/consultar', [RelacionController::class, 'mostrar']);
  Route::get('/relacion/{id}/quitar', [RelacionController::class, 'quitar']);

  Route::get('/estrategia/{id}/editfija', [GerenteProductoController::class, 'editfija']);
  Route::post('/estrategia/{id}/edit', [GerenteProductoController::class, 'update_estrategia']);
  Route::post('/estrategia/{id}/editfija', [GerenteProductoController::class, 'update_fija']);
  Route::get('/estrategia/{id}/calculo', [GerenteProductoController::class , 'calculo']);

  Route::get('/historico/{id}/show', [HistoricoController::class, 'mostrar']);

  Route::post('/inventario/{id}/edit', [AdministrativoController::class, 'updates']);
  Route::get('/consolidado', [AdministrativoController::class, 'total']);
  Route::get('/consolidado/{id}/show', [AdministrativoController::class, 'detalle']);
});
Auth::routes();
