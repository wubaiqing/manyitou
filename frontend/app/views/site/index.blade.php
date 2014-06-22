@extends('layouts.master')

@section('content')

	<!-- Banner -->
	<div id="content">
		@include('site.banner', ['banner' => $banner])
		@include('site.billboard', ['billboard' => $billboard])
		@include('site.process')
		@include('site.goods-list', ['goods' => $goods])
		@include('site.website-list')
		@include('site.store-list')
	</div>




@stop

