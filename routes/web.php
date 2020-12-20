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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/register', 'HomeController@register')->name('registerIndex');
Route::get('/login', 'HomeController@login')->name('loginIndex');

// Usuarios
Route::post('/registers', 'UsuarioController@store')->name('registerStore');

// Citas
Route::post('/citas', 'CitaController@store')->name('citaStore');
Route::get('/cita', 'HomeController@cita')->name('citaIndex');
Route::get('/mis-citas', 'HomeController@verCitas')->name('misCitasIndex');

// Pago
Route::get('/paidment', 'HomeController@pago')->name('pagoIndex');

// Perfil
Route::get('/profile', 'HomeController@perfil')->name('perfilIndex');
Route::get('/profilerecep', 'HomeController@perfilrecep')->name('perfilIndex');