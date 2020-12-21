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

//Admin
Route::get('/crear', 'AdminController@index')->name('admin');
Route::post('/creas', 'AdminController@store')->name('adminStore');

//Recepcionista
Route::get('/lista', 'PaidmentController@index')->name('recepcionista');
Route::get('/pagar/{id}', 'PaidmentController@indexpagar')->name('paidment');
Route::post('/pagado/{id}', 'PaidmentController@pagado')->name('paid');


Auth::routes();


