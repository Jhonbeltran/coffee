<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontController@login');
Route::get('inicio', 'FrontController@index');

Route::resource('usuario', 'UsuarioController');

Route::resource('log', 'LogController');

Route::resource('productor', 'ProducerController');
Route::resource('operador', 'OperatorController');

Route::resource('especie', 'SpecieController');
Route::resource('variedad', 'VarietyController');

Route::resource('ubicacion', 'LocationController');

Route::resource('cultivo', 'CropController');

Route::resource('labor', 'TaskController');

Route::resource('actividad', 'ActivityController');

