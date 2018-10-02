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
    		$posts = Post::where('title', 'like', "%$request->keyword%")->paginate(20);
    		$posts->withPath("?keyword=" . $request->keyword);
    	}

    	return view('welcome', ['posts' => $posts]);
    }

    public function postsByCategory($cateId){
        $posts = Post::where('cate_id', $cateId)->paginate(20);
        return view('welcome', ['posts' => $posts]);
    }
}
