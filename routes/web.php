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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/investigacion', 'InvestigacionController');

Route::post('/investigacion/crear', 'InvestigacionController@crear')->name('investigacion.crear');

Route::get('/{cod_inv}', 'InvestigacionController@detail')->name('investigacion.detail');
