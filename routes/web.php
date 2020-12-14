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
    return view('welcome');
});

Route::get('/register', function () {
    return view('/pages/index');
});

Route::get('/profile',function(){
    return view('layouts/profile');
});
Route::get('/profile/user',function(){
    return view('login/user/user');
});
Route::get('/profile/user/xd',function(){
    return view('login/user/quote/quote');
});
