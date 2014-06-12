@extends('layouts.master')

@section('content')

<div id="header">
	@include('home.top')
</div>

<!-- Banner -->
<div id="content">
	@include('home.detail', ['detail' => $detail])
</div>

@include('home.footer')

@stop

