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
Route::get('/permiso', 'PermisoController@index'); */
//Route::get('/permiso/{nombre}', 'PermisoController@index');
//Route::get('permiso/{nombre}/{slug?}', 'PermisoController@index');//pasar parametros
//Route::get('admin/sistema/permiso', 'PermisoController@index')->name('permiso');//con el name se puede usar el route('permiso')
Route::get('permiso/{nombre}', function ($nombre) {
    return $nombre;
})->where('nombre', '[A-Za-z]+');