<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>满意投—打造国内最大的电商资源广告联盟</title>
    <link rel="shortcut icon" href="http://myt.oss-cn-hangzhou.aliyuncs.com/static/favicon/%E5%B0%8F%E5%9B%BE%E6%A0%87.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/base-min.css?v=1.0.5') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/index.css?v=1.0.8') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/page.css?v=1.0.5') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/colorbox.css?v=1.0.5') }}">
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('static/js/jquery.colorbox.js') }}"></script>
    <script src="{{ asset('static/js/jquery.lazyload.js') }}"></script>
    <script src="{{ asset('static/js/index.js') }}"></script>
    @section('styles')
    @show
</head>
<body>

    @include('site.header')
    @yield('content')
    @include('site.qq')
    @include('layouts.footer')
    @include('layouts.cnzz')
</body>
</html>
