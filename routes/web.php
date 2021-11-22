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

Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('jugar', 'FrontController@jugar');
Route::get('contestar', 'FrontController@contestar');
Route::get('admin','FrontController@admin');
Route::resource('usuario','UsuarioController');
Route::resource('reportes','ReporteController');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
Route::resource('video','VideoController');
Route::resource('juego','JuegoController');
Route::resource('test','TestController');
Route::get('index','FrontController@index');


Route::resource('mail','MailController');
Route::get('/offline','PwaController@offline');