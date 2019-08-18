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
//サイト紹介
Route::get('/site_info', function () { return view('site_info'); });
//プロジェクトページ
Route::get('/projects/{id}', 'ProjectController@index')->name('project.top');

Route::get('/draft', 'DraftController@index')->name('draft');
Route::post('/draft/confirm', 'DraftController@confirm')->name('confirm');
Route::post('/draft/complete', 'DraftController@complete')->name('complete');

Route::group(['middleware' => ['auth']], function() {
	//会員情報変更
	Route::get('user/{id}/edit', 'UserController@edit');
	Route::post('user/{id}/edit/store', 'UserController@store');
	//マイページ
	Route::get('/user/{id}/top', function () { return view('user/top'); });
	//退会
	Route::get('/user/{id}/disable', function () { return view('user/disable'); });
	//支援選択ページ
	Route::get('/projects/{id}/supports/select', 'SupportController@index')->name('reward.select');
	//個別支援ページ
	Route::get('/projects/{id}/supports/{reward_id}', 'SupportController@showSelectedReward')->name('selected');
	Route::post('/projects/{id}/supports/{reward_id}', 'SupportController@storeSelectedReward');
	//支援内容確認ページ
	Route::post('/projects/{id}/supports/{reward_id}/confirm', 'SupportController@confirmSelectedReward')->name('confirm');
	//支援完了ページ
	Route::post('/projects/{id}/supports/{reward_id}/complete', 'SupportController@completeSelectedReward')->name('complete');
});

//認証機能
Auth::routes();
// お問い合わせフォーム
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/confirm', 'ContactController@confirm')->name('confirm');
Route::post('contact/sent', 'ContactController@sent')->name('sent');
// 本人確認URL
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');
