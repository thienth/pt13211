<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
class PostController extends Controller
{
    public function index(){
    	$posts = Post::paginate(20);

    	return view('admin.post.index', 
    				[
    					'posts' => $posts
    				]);
    }

    public function remove($id){
    	$post = Post::find($id);
    	if($post != null){
    		$post->delete();
    	}

    	return redirect(route('post.list'));
    }

    public function add(){
    	$post = new Post();
    	$cates = Category::all();

    	return view('admin.post.form', 
    				[
    					'post' => $post,
    					'cates' => $cates
    				]);
    }

    public function edit($id){
    	$post = Post::find($id);
    	if($post != null){

	    	$cates = Category::all();

	    	return view('admin.post.form', 
	    				[
	    					'post' => $post,
	    					'cates' => $cates
	    				]);
    	}
    	return redirect(route('post.list'));
    }

    public function save(Request $request){
    	if($request->id == null){
    		$model = new Post();
    	}else{
    		$model = Post::find($request->id);
    	}

    	$model->fill($request->all());
    	$model->save();
    	return redirect(route('post.list'));
    }
}
