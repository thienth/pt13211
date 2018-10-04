<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
class PostController extends Controller
{
    public function index(){
    	$posts = Post::paginate(20);

    	return view('admin.post.index', 
    				[
    					'posts' => $posts
    				]);
    }
}
