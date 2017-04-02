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

Route::get('/', 'PostsController@getHome');

Route::get('/account', function(){
	return view('account');
});
Route::get('article', function(){
	return view('articles');
});

Route::get('master',function(){
	return view('master');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
