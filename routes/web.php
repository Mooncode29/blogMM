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

<<<<<<< HEAD

Route::get('/', 'PostsController@getHome');
=======
>>>>>>> 5988928634d73635be6eb43b56890da76eaa4b6c


Route::get('/', function(){
	return view('home');
});
Route::get('article', function(){
	return view('articles');
});

Route::get('master',function(){
	return view('master');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
<<<<<<< HEAD

Route::get('/admin', function () {
    return view('admin-pages.home');
});

// Route::get('/', 'PostsController@getHome' );
Route::get('visitor_posts','PostsController@getVisitorPosts');

=======

Route::get('master/create', 'AdminArticleController@create');
Route::resource('posts', 'AdminArticleController');
>>>>>>> 5988928634d73635be6eb43b56890da76eaa4b6c

