<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request){
    	if(isset($request->keyword) && $request->keyword != ""){
    		$cates = Category::where('name', 'like', "%$request->keyword%")->get();
    	}else{

    		$cates = Category::all();
    	}
    	return view('cate-list', ['data' => $cates]);
    }
}
