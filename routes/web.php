<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('index'); })->name('index');

Route::get('/prueba', 'PruebaController@probar')->name('prueba');

Route::get('/roles', 'RolesController@probar')->name('roles');

Route::get('/publicaciones', 'PublicacionesController@index')->name('publicaciones');

Route::get('/publicacion', 'PublicacionController@index')->name('publicacion');

Auth::routes();

Route::get('/contact', 'ContactController@index')->name('contact');

// papaya
