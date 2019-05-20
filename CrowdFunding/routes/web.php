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

//ホーム画面
Route::get('/', function () { return view('layout'); });
Route::get('/terms', function () { return view('terms'); });
//認証機能
Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
