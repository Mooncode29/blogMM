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

// Route::get('home', function(){
	// return view('home');
// });
Route::get('articles', function(){
	return view('articles');
});

Route::get('admin', function(){
	return view('admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', function () {
    return view('admin-pages.home');
});

// Route::get('/', 'PostsController@getHome' );
Route::get('visitor_posts','PostsController@getVisitorPosts');


