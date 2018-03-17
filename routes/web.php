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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//rutas para ingresar a empleados
Route::resource('empleados','empleadoController');
Route::resource('contratos','contratoController');
Route::resource('cargos','cargoController');
Route::resource('bancos','bancoController');

//ruta para los correspondientes logs lfiquitiva
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
