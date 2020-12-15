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

<<<<<<< HEAD
Route::get('/log', function () {
    return view('Login/index');
});

Route::get('/cita', function () {
    return view('Cita/index');
});

Route::get('/Registra', function () {
    return view('Registrar/index');
=======
Route::get('/home', function () {
    return view('/pages/index');
});


Route::get('/register', function () {
    return view('/pages/register');
>>>>>>> 09ceb13c9e7b6bd385d29a9dce05b59cf3730985
});