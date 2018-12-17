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
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/{nombre}','PerteneceController@index');
Route::get('/docente', 'DocenteController@index')->name('docente');

Route::resource('/clase','ClaseController');
Route::resource('/curso','CursoController');
Route::resource('/asiste','AsisteClaseController');
Route::resource('/justificacion','JustificacionClaseController');
