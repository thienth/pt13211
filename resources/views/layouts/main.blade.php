<!DOCTYPE html>
<html lang="en">

<head>
	@include('_share.assets')

	<title>Index</title>
</head>

<body>
	@include('_share.header')
	@yield('content')
	@include('_share.partner')
	@include('_share.footer')
</body>

	@yield('js')

</html>