<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
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
    return view('home');
});

Auth::routes();

/* Route::get('/clientes', 'HomeController@index')->name('home'); */
Route::get('/clientes', 'ClientesController@index')->name('clientes');
Route::get('/set_clientes', 'ClientesController@set_clientes')->name('set_clientes');
/* Route::post('add_cliente', [ClientesController::class, 'store']);
 */
 Route::post('/add_cliente','ClientesController@store')->name('add_cliente');;
//lang
Route::get('locale/{locale}', function($locale){
    if ($locale) {
        App::setLocale($locale);
        session()->put('lang', $locale);
    }
    return Redirect::back();
 });
