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
    return view('welcome');
});
/*rutas para el manejo del usuario y autenticacion */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*rutas para manejar los equipos */
Route::get('/equipo/c','\App\Http\Controllers\cancha\equipoControlador@crear');
Route::POST('/equipo/guardar','\App\Http\Controllers\cancha\equipoControlador@guardar');
Route::get('/equipo/index','\App\Http\Controllers\cancha\equipoControlador@index');





