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
Route::get('/register', 'UsuarioController@index')->name('panel-user');
// Route::post('/register2', 'UsuarioController@crear')->name('crear.usuario');
Route::post('/index', 'UsuarioController@store')->name('store');
// Route::get('/usuario/{id}', 'UsuarioController@show')->name('show');

// Citas


// Vehiculos
