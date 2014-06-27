@extends('layouts.master')

@section('content')

	@include('site.banner', ['billboard' => $billboard])
	<!-- Banner -->
	<div id="content">
		@include('site.process')
		@include('site.goods-list', ['goods' => $goods])
		@include('site.website-list')
		@include('site.store-list')
	</div>




@stop

