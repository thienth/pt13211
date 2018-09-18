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

Route::get('/', function () {
	$name = 'thienth';
    return view('welcome', ['data' => $name]);
});

Route::get('hienpm', function(){
	return view('hienpm');
});

Route::get('test/ui/loi', function(){
	return view('welcome');
});

Route::post('hien', function(){
	return 'request -> post';
});

Route::any('hoang', function(){
	return 'request -> any';
});

Route::match(['get', 'post'],'hoang-dep-zai', function(){
	return 'request -> match';
});

Route::get('thienth', function(){
	return 'Trần Hữu Thiện
	<form action="/thienth" method="post">
		<button type="submit"> Request post</button>
	</form>
	';
});



Route::get('test/{id}/{name}', function($name, $id){
	return $id . '-' . $name;
});

Route::group(['prefix' => 'categories', 'middleware' => 'auth'], function() {

    Route::get('/', 'CategoryController@index');

	Route::get('/update/{id}/{name}', function($id = null){
		dd($id);
	})->name('cate.edit');

	Route::get('thienth', function(){
		return 'thong tin cac mon hoc trong ky';
	});
});

Route::get('login', function(){
	dd('day la man hinh login');
})->name('login');








