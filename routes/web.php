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
// Route::get('article', function(){
// 	return view('articles');
// });
Route::get('article', 'PostController@userindex');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('master', 'PostController@index');
Route::get('master/create', 'PostController@create');
Route::post('master/store', 'PostController@store');
Route::get('master/edit/{id}', 'PostController@edit');
Route::post('master/update', 'PostController@update');
Route::get('master/show/{id}', 'PostController@show');
Route::delete('master/delete/{id}', 'PostController@destroy');
Route::resource('posts', 'PostController');

