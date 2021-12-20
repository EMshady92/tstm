<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListasController;
use App\Http\Controllers\ListasVentasController;
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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//listas
Route::resource('users', App\Http\Controllers\UsersController::class);
Route::get('lista_usuarios', [App\Http\Controllers\UsersController::class, 'lista_usuarios']);
Route::post('guardar_usuario',[App\Http\Controllers\UsersController::class, 'guardar_usuario']);
/* Route::put('actualiza_user/{id}',[App\Http\Controllers\UsersController::class, 'update'])->name('users.update'); */
//listas
Route::resource('listas', App\Http\Controllers\ListasController::class);
//listas sal-cal
Route::resource('listas_cal_sal', App\Http\Controllers\ListasCalSalController::class);
//listas ventas
Route::resource('listas_ventas', App\Http\Controllers\ListasCalSalController::class);

//listas calidad
Route::resource('listas_cali', App\Http\Controllers\ListasCalidadController::class);
Route::get('guardar_nuevo_cliente/{nombre}',[App\Http\Controllers\ListasCalidadController::class, 'guardar_nuevo_cliente']);
Route::get('editar_cliente/{nombre}/{id}',[App\Http\Controllers\ListasCalidadController::class, 'editar_cliente']);


//listas clientes
Route::resource('listas_cliente', App\Http\Controllers\ListasClientesController::class);

//Listas aleaciones
Route::resource('listas_aleaciones', App\Http\Controllers\ListasAleacionesController::class);
Route::get('traer_aleaciones/{id}',[App\Http\Controllers\ListasAleacionesController::class, 'traer_aleaciones']);
Route::get('guardar_nueva_aleacion/{nombre}/{id_cliente}',[App\Http\Controllers\ListasAleacionesController::class, 'guardar_nueva_aleacion']);

