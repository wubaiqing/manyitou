@extends('layouts.master')

@section('content')

	@include('site.banner', ['billboard' => $billboard, 'banner' => $banner])
	<!-- Banner -->
	<div id="content">
		@include('site.process')
		@include('site.goods-list', ['goods' => $goods])
		@include('site.website-list')
		@include('site.store-list')
	</div>




@stop

