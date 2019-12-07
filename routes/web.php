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



/*rutas para el manejo del usuario y autenticacion */
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//ruta principal home
Route::get('/home', function () {
    return view('cancha.equipo.carrucel');
});


/*ruta del dashboard*/
Route::get('/dashboard', function () {
    return view('dashboard2');
});
Route::get('/cerrar','\App\Http\Controllers\HomeController@cerrar_sesion');

/*rutas para manejar los equipos */
Route::get('/equipo/crear','\App\Http\Controllers\cancha\equipoControlador@crear');
Route::get('/equipo/index','\App\Http\Controllers\cancha\equipoControlador@index');
Route::get('/equipo/eliminar','\App\Http\Controllers\cancha\equipoControlador@eliminar');
Route::get('/equipo/todos','\App\Http\Controllers\cancha\equipoControlador@ver_todos_los_equipo');
Route::post('/equipo/guardar','\App\Http\Controllers\cancha\equipoControlador@guardar');
Route::post('/equipo/destroy','\App\Http\Controllers\cancha\equipoControlador@destroy');
Route::get('/integrantes/{equipo}','\App\Http\Controllers\cancha\equipoControlador@mostrar_integrantes');
Route::get('/integrante/agregar/{codigo_sol}/{equipo}','\App\Http\Controllers\cancha\solicitudController@aceptar_sol');


/*rutas para el manejo de los eventos*/

Route::get('/evento/crear','\App\Http\Controllers\cancha\eventoControlador@crear');
Route::post('/evento/guardar','\App\Http\Controllers\cancha\eventoControlador@guardar');
Route::get('/evento/index','\App\Http\Controllers\cancha\eventoControlador@mostrar_eventos');

/*rutas para el manejo de la creacion de torneos */
Route::get('torneo/registro','\App\Http\Controllers\tournament_master\torneo@index');
Route::get('torneo/iniciar','\App\Http\Controllers\tournament_master\torneo@iniciar');
Route::post('torneo/setear','\App\Http\Controllers\tournament_master\torneo@manejador');
Route::post('torneo/next1','\App\Http\Controllers\tournament_master\torneo@next1');
Route::post('torneo/next2','\App\Http\Controllers\tournament_master\torneo@next2');
Route::post('torneo/next3','\App\Http\Controllers\tournament_master\torneo@next3');
Route::post('torneo/next4','\App\Http\Controllers\tournament_master\torneo@next4');
//Route::get('torneo/mostrar','\App\Http\Controllers\tournament_master\torneo@manejador');

Route::get('torneo/mostrar', function () {
    return view('torneo.bracket');
});

/*rutas para el manejo de los horarios*/
/*Route::get('/', function () {
    return view('welcome')->with('subjects',Session::get('subjects'));
});*/


Route::get('/','\App\Http\Controllers\horario\ScheduleController@crear');
Route::get('/horario','\App\Http\Controllers\horario\ScheduleController@update');
Route::get('/update', '\App\Http\Controllers\horario\ScheduleController@update')->name('update');

Route::get('/flush', function () {
    //reemplazar esto por la instruccion que solo elimna la v. de s. llamada subjects
    Session::flush(); 
    return view('welcome');
});

Route::get('/flush/{key}', '\App\Http\Controllers\horario\ScheduleController@flushbykey')->where('key', '[0-9]+');


//rutas para el manejo del gimnasio

Route::post('gimnasio/guardar','\App\Http\Controllers\gimnasio\suscripcionController@guardar');
Route::post('gimnasio/eliminar','\App\Http\Controllers\gimnasio\suscripcionController@eliminar');
Route::get('gimnasio/d','\App\Http\Controllers\gimnasio\suscripcionController@destroy');
Route::get('gimnasio/registrar','\App\Http\Controllers\gimnasio\suscripcionController@crear');
Route::get('gimnasio/index','\App\Http\Controllers\gimnasio\suscripcionController@ver_todas_las_suscripciones');

//rutas para el manejo de la colina

Route::get('colina/registro','\App\Http\Controllers\reycolina\ReycolinaController@crear');
Route::post('colina/iniciar','\App\Http\Controllers\reycolina\ReycolinaController@iniciales');
Route::post('colina/ajustar','\App\Http\Controllers\reycolina\ReycolinaController@mover');
Route::post('colina/agregar','\App\Http\Controllers\reycolina\ReycolinaController@agregar');
Route::post('colina/reset','\App\Http\Controllers\reycolina\ReycolinaController@resetear');

Route::get('master', function () {
    return view('layouts.ini');
});

//rutas para el manejo de las clasificaciones
Route::get('clasificacion/index','\App\Http\Controllers\cancha\equipoControlador@clasificacion');

//rutas para el manejo de la solicitud
Route::get('solicitud/ini','\App\Http\Controllers\cancha\solicitudController@crear_solicitud');
Route::post('solicitud/registrar','\App\Http\Controllers\cancha\solicitudController@guardar_solicitud');
Route::get('solicitud/todas','\App\Http\Controllers\cancha\solicitudController@ver_todas_las_solicitudes');
Route::get('solicitud/agregar/{codigo_sol}','\App\Http\Controllers\cancha\solicitudController@guardar_solicitante');
Route::get('solicitud/mis/solicitudes','\App\Http\Controllers\cancha\solicitudController@muestra_mis_sol');
Route::get('solicitud/solicitantes/{codigo_sol}','\App\Http\Controllers\cancha\solicitudController@ver_todos_los_solicitantes');
Route::get('solicitud/aceptar/{$equipo}/{codigo_sol}','\App\Http\Controllers\cancha\solicitudController@aceptar_sol');
Route::get('solicitud/solicitantes/{codigo_sol}/eleccion','\App\Http\Controllers\cancha\solicitudController@elegir_solicitantes');

Route::get('registrarse', function () {
    return view('auth.registerl');
});