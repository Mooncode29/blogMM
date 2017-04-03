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

Route::get('articles', function(){
	return view('articles');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', function () {
    return view('admin-pages.home');
});
Route::post('/admin/create', 'AdminPostsController@store');
Route::get('/', 'PostsController@getHome' );
Route::get('visitor_posts','PostsController@getVisitorPosts');


