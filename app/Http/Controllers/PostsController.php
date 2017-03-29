<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller{

	public function getHome(){

		return view('home');
	}

	public function getVisitorPosts(){
		return view('articles');

	}
}

