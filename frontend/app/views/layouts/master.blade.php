<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>满意投 - 各大U站平台秒上！</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('static/css/base-min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('static/css/page.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('static/css/colorbox.css') }}">
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="{{ asset('static/js/jquery.colorbox.js') }}"></script>
	<script src="{{ asset('static/js/jquery.lazyload.js') }}"></script>
	<script src="{{ asset('static/js/index.js') }}"></script>
	@section('styles')
	@show
</head>
<body>
	@include('site.top')
	@yield('content')
	@include('layouts.footer')
	@include('layouts.cnzz')
</body>
</html>
