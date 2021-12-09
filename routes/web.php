<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListasController;
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
Route::post('guardar_usuario',[App\Http\Controllers\UsersController::class, 'guardar_usuario']);
//listas
Route::resource('listas', App\Http\Controllers\ListasController::class);


