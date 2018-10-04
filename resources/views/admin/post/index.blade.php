@extends('layouts.admin.main')
@section('title', 'Danh sách bài viết')
@section('pagename', 'Bài viết')
@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Bordered Table</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tbody>
    	<tr>
          <th style="width: 10px">#</th>
          <th>Tiêu đề</th>
          <th>Danh mục</th>
          <th>Ảnh</th>
          <th>
          	<a href="" class="btn btn-xs btn-success">Thêm bài viết</a>
          </th>
        </tr>
        @foreach ($posts as $p)
	        <tr>
	          <td>{{$p->id}}</td>
	          <td>{{$p->title}}</td>
	          <td>
	          	{{$p->category->name}}
	          </td>
	          <td>
	          	<img src="{{$p->image}}" width="100">
	          </td>
	          <td>
	          	<a href="" class="btn btn-xs btn-primary">Sửa</a>
	          	<a href="" class="btn btn-xs btn-danger">Xoá</a>
	          </td>
	        </tr>
        @endforeach
        
      </tbody>
  	  </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
      <ul class="pagination pagination-sm no-margin pull-right">
        <li><a href="#">«</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">»</a></li>
      </ul>
    </div>
  </div>
@endsection