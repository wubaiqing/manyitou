@extends('layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('static/css/about.css') }}">
@stop

@section('content')

<div id="content">
	<div class="content-bd">
		<div id="billboard-list">
			<ul>
				@foreach ($list as $item)
				<li>
					<a target="_blank" href="">{{ Str::limit($item->title, 40) }}</a>
					<span class="date">{{ $item->created_at }}</span>
				</li>
				@endforeach
			</ul>
		</div>
		{{ $list->links() }}
	</div>
</div>
@stop