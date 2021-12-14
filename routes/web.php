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
//listas
Route::resource('listas', App\Http\Controllers\ListasController::class);
//listas sal-cal
Route::resource('listas_cal_sal', App\Http\Controllers\ListasCalSalController::class);
//listas ventas
Route::resource('listas_ventas', App\Http\Controllers\ListasVentasController::class);


