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

Route::get('/', function () {
    return view('/pages/index');
});

Route::get('/home', function () {
    return view('/pages/index');
});


// Route::post('/register', function () {
//     return view('/pages/login');
// });

Route::get('/register', 'UsuarioController@index')->name('panle-registro');

// Usuarios
Route::post('/usuario', 'UsuarioController@store')->name('store');
Route::get('/usuario/{id}', 'UsuarioController@show')->name('show');

// Citas


// Vehiculos
