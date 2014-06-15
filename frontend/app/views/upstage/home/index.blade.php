@extends('layouts.master')

@section('content')

<div id="header">
	@include('home.top')
</div>

<!-- Banner -->
<div id="content">
	@include('home.banner')
	@include('home.billboard-list', ['billboard' => $billboard])
	@include('home.goods-list', ['goods' => $goods])
	@include('home.website-list')
	@include('home.store-list')
</div>

@include('home.footer')

@stop

