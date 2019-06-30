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
Route::get('user/{id}/edit', 'UserController@index');
Route::post('user/{id}/edit/store', 'UserController@store');
//マイページ
Route::get('/user/{id}/top', function () { return view('user/top'); });
//退会
Route::get('/user/{id}/disable', function () { return view('user/disable'); });
//問い合わせフォーム
Route::get('/contact', 'HomeController@index')->name('contact');
Route::post('/contact', 'HomeController@store')->name('contact');
//掲載に関するご相談
Route::get('draft', 'DraftController@index');
Route::post('draft/store', 'DraftController@store');
//プロジェクトページ
Route::get('/projects/{id}', 'ProjectController@index');
//支援選択ページ
Route::get('/projects/{id}/supports/select', 'SupportController@index');
//個別支援ページ
Route::get('/projects/{id}/supports/{reward_id}', 'SupportController@getSelectedReward');
Route::post('/projects/{id}/supports/{reward_id}/store', 'UserController@store');


// Route::post('draft/confirm', 'DraftController@confirm')->name('confirm');
// Route::post('draft/complete', 'DraftController@confirm')->name('complete');
//});
//認証機能
Auth::routes();


// 本人確認URL
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');
