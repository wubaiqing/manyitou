@extends('layouts.master')

@section('content')

	<!-- Banner -->
	<div id="content">
		@include('home.banner')
		@include('home.billboard-list', ['billboard' => $billboard])
		@include('home.goods-list', ['goods' => $goods])
		@include('home.website-list')
		@include('home.store-list')
	</div>
	<!-- End Banner -->

	@include('home.footer')

@stop

