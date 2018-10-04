<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\User;

class DashboardController extends Controller
{
    public function index(){

    	$totalCate = Category::count();
    	$totalPost = Post::count();
    	$totalUser = User::count();
    	
    	return view('admin.dashboard', 
    				[
						"totalCate" => $totalCate,
						"totalPost" => $totalPost,
						"totalUser" => $totalUser,
    				]);
    }
}
