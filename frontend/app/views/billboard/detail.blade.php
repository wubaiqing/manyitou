@extends('layouts.master')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('static/css/about.css') }}">
@stop

@section('content')

	<!-- Banner -->
	<div class="main">
		<div class="main_content">
			<div class="content">
				<div class="content_right">
					<div class="content_title">{{ Str::limit($detail->title, 60) }}</div>
					<div class="content_detailed">
						{{ $detail->content }}
					</div>
				</div>
			</div>
		</div>
	</div>

@stop

