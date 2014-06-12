<!DOCTYPE HTML>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<title>满意投-后台管理</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('static/css/bootstrap.css') }}">
	<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
	<script src="{{ asset('static/js/ueditor/ueditor.config.js') }}"></script>
	<script src="{{ asset('static/js/ueditor/ueditor.all.min.js') }}"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid btn-block">
		@include('admin.nav')
		<div class="span10">
			<div class="box">
				@yield('content')
			</div>
		</div>

	</div>
</div>
</body>
</html>
