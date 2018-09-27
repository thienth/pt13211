<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    public function index(Request $request){
    	if($request->keyword == null || $request->keyword == ""){

    		$posts = Post::paginate(20);	
    	}else{
    		$posts = Post::where('title', 'like', "%$request->keyword%")->get();
    	}

    	return view('welcome', ['posts' => $posts]);
    }
}
