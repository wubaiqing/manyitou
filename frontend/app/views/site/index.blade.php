@extends('layouts.master')

@section('content')

	<!-- Banner -->
	<div id="content">
		@include('site.banner')
		@include('site.billboard', ['billboard' => $billboard])
		@include('site.goods-list', ['goods' => $goods])
		@include('site.website-list')
		@include('site.store-list')
	</div>
	<!-- End Banner -->


@stop

