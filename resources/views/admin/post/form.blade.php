@extends('layouts.admin.main')
@php
	$title = $post->id == null ? "Thêm bài viết" : "Sửa bài viết";
@endphp
@section('title', $title);
@section('pagename', $title);
@section('content')
	<form enctype="multipart/form-data"
			action=""
			method="post">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Tiêu đề</label>
					<input type="text" name="title" class="form-control" value="{{$post->title}}">
				</div>
				<div class="form-group">
					<label>Danh mục</label>
					<select name="cate_id" class="form-control">
						@foreach ($cates as $item)
							<option 
								@if($item->id == $post->cate_id)
								selected
								@endif
								value="{{$item->id}}">{{$item->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Tác giả</label>
					<input type="text" name="author" class="form-control" value="{{$post->author}}">
				</div>
				<div class="form-group">
					<label>Trạng thái</label>
					<br>
					<input type="radio" name="status" value="-1"> Huỷ đăng &nbsp;
					<input type="radio" name="status" value="0"> Nháp &nbsp;
					<input type="radio" name="status" value="1"> Active &nbsp;
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<img src="{{$post->image}}" class="img-responsive">
					</div>
				</div>
				<div class="form-group">
					<label>Ảnh bài viết</label>
					<input type="file" name="image" class="form-control" >
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Mô tả ngắn</label>
					<textarea class="form-control" name="short_desc" rows="5"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Nội dung</label>
					<textarea id="content" class="form-control" name="content" rows="15"></textarea>
				</div>
			</div>
		</div>
		<div class="text-right">
			<a href="{{ route('post.list') }}"
				class="btn btn-sm btn-danger">Huỷ</a>
			<button type="submit" class="btn btn-sm btn-primary">Lưu</button>
		</div>
	</form>


@endsection

@section('js')
	<script type="text/javascript">
		CKEDITOR.replace('content');
	</script>
@endsection
