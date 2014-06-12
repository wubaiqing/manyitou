@extends('layouts.master')

@section('content')

<div id="header">
	@include('home.top')
</div>

<!-- Banner -->
<div id="content">
	@include('home.banner')
	@include('home.goods-list', ['goods' => $goods])
</div>

@include('home.footer')

@stop

