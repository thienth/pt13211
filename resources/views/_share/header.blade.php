<div id="header">
	<div class="container">
		<div class="col-md-2 col-xs-12 col-sm-4">
			<a href="index.html">
				<img src="{{ asset('img/logo1.png') }}" alt="">
			</a>
		</div>
		<div class="col-md-10 col-xs-12 col-sm-8">
			<div class="header-time col-md-12 col-xs-12 col-sm-12">
				<a href="#" class="col-xs-12 col-md-3">Thời gian làm việc:8h30-17h</a>
				<a href="#" class="col-xs-12 col-md-2">0124752388</a>
			</div>
			<div class="clear-fix"></div>
			<div class="header-menu col-md-12">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.html">Trang chủ</a>
					</li>
					<li>
						<a href="gioithieu.html">Giới thiệu</a>
					</li>
					<li>
						<a href="gioithieu.html">{{$menuValue}}</a>
					</li>
					<li>
						<a href="liên hệ.html">Liên hệ</a>
					</li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control search" placeholder="Từ khóa">
					</div>
					<button type="submit" class="btn btn-info">Tìm kiếm</button>
				</form>
			</div>
		</div>
	</div>
</div>