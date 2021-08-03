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

Route::get('/', 'PageController@show')->name('home');
Route::get('/usuario/{id}', 'PageController@showuser')->name('user.detail');
Route::get('/saludo', 'PageController@saludo')->name('hello');
Route::get('/contacto', 'PageController@contacto')->name('contact');

Route::get('/nuevo', 'PageController@nuevo')->name('user.new');
Route::post('/usuario/crear', 'PageController@store');

/** Puede haber dos rutas con el mismo nombre pero con distinto metodo de envio (post, get, etc. ) */
Route::get('/usuario/{user}/editar', 'PageController@editar')->name('user.editar');
Route::put('/usuario/{user}', 'PageController@actualizar');

Route::delete('/usuario/{user}', 'PageController@eliminar')->name('user.eliminar');
