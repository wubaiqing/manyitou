@extends('layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/about.css') }}">
@stop


@section('content')

<div id="header">
	@include('home.top')
</div>

<!-- Banner -->
<div class="main">
	<div class="main_content">
		<div class="content">
			@include('billboard.detail', ['detail' => $detail])
		</div>
	</div>
</div>
@include('home.footer')


@stop

