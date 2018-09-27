<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    public function index(Request $request){
    	if($request->keyword == null || $request->keyword == ""){

    		$posts = Post::all();	
    	}else{
    		$posts = Post::where('title', 'like', "%$request->keyword%")->get();
    	}

    	return view('welcome', ['posts' => $posts]);
    }
}
