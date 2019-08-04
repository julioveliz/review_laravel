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

/*

Route::get('/', function () {
    return view('welcome');
});
*/


/*
Route::get('foo', function () {
    return 'Hello World';
});
*/

//Route::get('permiso/{nombre}', 'PermisoController@index'); //parametros obligatorios

//Route::get('/permiso/{?nombre}', 'PermisoController@index'); //parametros opcional con ?

Route::get('/', 'InicioController@index');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');

    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    

});

//Route::view('/permiso', 'permiso');


//Route::view('permiso/{nombre}', 'permiso');