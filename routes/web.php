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
Route::get('editar_aleacion/{nombre}/{id}',[App\Http\Controllers\ListasAleacionesController::class, 'editar_aleacion']);
Route::get('validar_aleacion/{id}',[App\Http\Controllers\ListasAleacionesController::class, 'validar_aleacion']);
Route::post('guardar_compuestos/{id}',[App\Http\Controllers\ListasCalidadController::class, 'guardar_compuestos'])->name('guardar_compuestos');
Route::get('cambia_rango_1/{value}/{id}',[App\Http\Controllers\ListasCalidadController::class, 'cambia_rango_1']);
Route::get('cambia_rango_2/{value}/{id}',[App\Http\Controllers\ListasCalidadController::class, 'cambia_rango_2']);
Route::get('inactiva_compuesto/{id}',[App\Http\Controllers\ListasCalidadController::class, 'inactiva_compuesto']);

//compras
Route::resource('nueva_programacion', App\Http\Controllers\ProgramacionesController::class);
Route::get('editar_programacion',[App\Http\Controllers\ProgramacionesController::class, 'editar_programacion']);
Route::get('traer_compras_dates/{fecha}/{filtro}',[App\Http\Controllers\ProgramacionComprasController::class, 'traer_compras_dates']);
Route::get('traer_datos_edit_compra/{id}',[App\Http\Controllers\ProgramacionComprasController::class, 'traer_datos_edit_compra']);
Route::resource('compras', App\Http\Controllers\ProgramacionComprasController::class);
Route::resource('ventas', App\Http\Controllers\ProgramacionVentasController::class);
Route::post('guardar_nueva_compra',[App\Http\Controllers\ProgramacionComprasController::class, 'nueva_compra'])->name('nueva_compra');
Route::post('guardar_nueva_venta',[App\Http\Controllers\ProgramacionVentasController::class, 'nueva_venta'])->name('nueva_venta');
Route::post('guardar_nueva_compra_excel',[App\Http\Controllers\ProgramacionComprasController::class, 'guardar_nueva_compra_excel'])->name('guardar_nueva_compra_excel');
Route::post('editar_compra',[App\Http\Controllers\ProgramacionComprasController::class, 'editar_compra'])->name('editar_compra');
