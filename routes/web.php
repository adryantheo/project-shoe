<?php

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

Route::get('/', function () { return view('app'); });
Route::get('/welcome', function () { return view('app'); });
Route::get('/item/{any}', function () { return view('app'); });
Route::get('/item/{any}/review', function () { return view('app'); });
Route::get('/cart', function () { return view('app'); });
Route::get('/checkout', function () { return view('app'); });

// admin
Route::get('/admin', function () { return view('appAdmin'); });
Route::get('/admin/dashboard', function () { return view('appAdmin'); });