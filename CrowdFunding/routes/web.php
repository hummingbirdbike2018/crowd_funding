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
//Route::group(['middleware' => 'auth'], function() {
	//ホーム画面
	Route::get('/', 'HomeController@index')->name('top');
	//利用規約
	Route::get('/terms', function () { return view('terms'); });
	//会員情報変更
	Route::get('/user/{id}/edit', 'UserController@index')->name('user/edit');
	Route::post('/user/{id}/edit', 'UserController@store')->name('user/edit');
	//マイページ
	Route::get('/user/{id}/top', function () { return view('user/top'); });
	//退会
	Route::get('/user/{id}/disable', function () { return view('user/disable'); });

	//});
//認証機能
Auth::routes();
