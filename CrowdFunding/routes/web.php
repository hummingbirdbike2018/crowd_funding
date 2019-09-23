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
//起案者フォーム
Route::get('/draft', 'DraftController@index')->name('draft');
Route::post('/draft/confirm', 'DraftController@confirm')->name('confirm');
Route::post('/draft/complete', 'DraftController@complete')->name('complete');

Route::group(['middleware' => ['auth']], function() {
	//マイページ
	Route::get('user/top', 'UserController@showUserMenu')->name('user.top');
	//基本情報
	Route::get('user/top/edit_basic', 'UserController@showBasicInfo')->name('user.show_basic');
	Route::post('user/top/post', 'UserController@storeBasicInfo')->name('user.store_basic');
	//配送先
	Route::get('user/top/edit_address', 'UserController@showShippingAddress')->name('user.show_address');
	Route::post('user/top/edit_address', 'UserController@storeShippingAddress')->name('user.store_address');
	//支援プロジェクト一覧
	Route::get('user/top/support_list', 'UserController@showSupportList')->name('user.show_support');
	//退会
	Route::get('user/top/disable', 'UserController@showDisable')->name('user.disable');
	Route::post('user/top/disable', 'UserController@storeDisable')->name('user.disable.store');
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
