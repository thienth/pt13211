<?php 

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::group(['prefix' => 'bai-viet'], function(){
	// danh sach bai viet
	Route::get('/', 'PostController@index')->name('post.list');
	Route::get('xoa/{id}', 'PostController@remove')->name('post.delete');

	Route::get('them', 'PostController@add')->name('post.add');
	Route::get('sua/{id}', 'PostController@edit')->name('post.edit');

});
 ?>