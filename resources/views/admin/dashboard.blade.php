@extends('layouts.admin.main')
@section('title', 'Thống kê')
@section('pagename', 'Thống kê')
@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{$totalCate}}</h3>

          <p>Danh mục</p>
        </div>
        <div class="icon">
          <i class="fa fa-list"></i>
        </div>
        <a href="#" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$totalPost}}</h3>

          <p>Bài viết</p>
        </div>
        <div class="icon">
          <i class="fa fa-file-word-o"></i>
        </div>
        <a href="{{ route('post.list') }}" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$totalUser}}</h3>

          <p>Thành viên</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">Quản lý <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
@endsection
@section('js')

@endsection