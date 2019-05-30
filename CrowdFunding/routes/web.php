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
Route::get('/', 'HomeController@index')->name('top');
//利用規約
Route::get('/terms', function () { return view('terms'); });
//認証機能
Auth::routes();
//マイページ
Route::get('/{id}/mypage', 'MemberController@index')->name('mypage');
// Route::get('/', 'HomeController@index')->name('home');
