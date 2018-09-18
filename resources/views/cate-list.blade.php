<form action="" method="get">
	<input type="text" name="keyword">
	<button type="submit">Tìm</button>
</form>
<ul>
	@foreach ($data as $c)
		<li>
			<a href="{{$c->slug}}">{{$c->name}}</a>
		</li>
	@endforeach
</ul>

