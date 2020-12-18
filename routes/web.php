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

// Route::get('/register', function () {
//     return view('/pages/register');
// });

// Usuarios
Route::get('/register', 'UsuarioController@index')->name('panel-user');
// Route::post('/register2', 'UsuarioController@crear')->name('crear.usuario');
Route::post('/index', 'UsuarioController@store')->name('store');
// Route::get('/usuario/{id}', 'UsuarioController@show')->name('show');

// Citas


// Vehiculos
