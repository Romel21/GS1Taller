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

// Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

// // Citas
Route::post('/citas', 'CitaController@store')->name('citaStore');
Route::get('/cita', 'HomeController@cita')->name('citaIndex');
Route::get('/mis-citas', 'HomeController@verCitas')->name('misCitasIndex');
Route::get('/mis-citas', 'CitaController@getData')->name('getCitas');
Route::delete('/delete/{id}', 'CitaController@destroy')->name('destroy');

// Pago
Route::get('/paidment', 'HomeController@pago')->name('pagoIndex');

// Perfil
Route::get('/profile', 'HomeController@perfil')->name('perfilIndex');

// Tareas
Route::get('/lista', 'HomeController@verTecnicos')->name('listar');
Route::get('/lista', 'OrdenController@getTecnicos')->name('getTecnicos');
Route::get('/tareas', 'HomeController@verTareas')->name('tasks');
Route::get('/tareas', 'OrdenController@getTareas')->name('getTareas');
Route::get('/asignar', 'HomeController@añadirTarea')->name('add');
Route::post('/ordenes', 'OrdenController@store')->name('ordenStore');

// Mecanico
Route::delete('/delete/{id}', 'OrdenController@destroy')->name('destroy');
Route::get('/agenda', 'HomeController@misTareas')->name('misTareas');
Route::get('/agenda', 'OrdenController@getMisTareas')->name('getMisTareas');

Auth::routes();


