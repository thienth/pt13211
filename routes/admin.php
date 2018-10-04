<?php 

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::group(['prefix' => 'bai-viet'], function(){
	// danh sach bai viet
	Route::get('/', 'PostController@index')->name('post.list');
});
 ?>