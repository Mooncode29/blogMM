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




Route::get('/', function(){
	return view('home');
});

Route::get('article', 'PostController@userIndex');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/home/create', 'PostController@create');
Route::post('store', 'PostController@store');
Route::get('edit/{id}', 'PostController@edit');
Route::post('update', 'PostController@update');
Route::get('show/{id}', 'PostController@show');
Route::delete('delete/{id}', 'PostController@destroy');
Route::resource('posts', 'PostController');


