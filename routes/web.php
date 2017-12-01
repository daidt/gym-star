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

Route::get('/', function () {
	return view('welcome');
});

Route::get('index',[
	'as' => 'homepage',
	'uses' => 'MainController@getIndex'
]);

Route::get('register',[
	'as' => 'register',
	'uses' => 'MainController@getRegister'
]);

Route::post('register',[
	'as' => 'register',
	'uses' => 'MainController@postRegister'
]);


Route::get('login',[
	'as' => 'login',
	'uses' => 'MainController@getLogin'
]);

Route::post('login',[
	'as' => 'login',
	'uses' => 'MainController@postLogin'
]);

Route::get('logout',[
	'as' => 'logout',
	'uses' => 'MainController@getLogout'
]);

Route::get('profile/{username}',[
	'as' => 'profile',
	'uses' => 'UserController@getProfile'
]);

Route::post('update_profile',[
	'as' => 'update_profile',
	'uses' => 'UserController@updateProfile'
]);

Route::get('mypage/{username}',[
	'as' => 'mypage',
	'uses' => 'UserController@getMyPage'
]);


