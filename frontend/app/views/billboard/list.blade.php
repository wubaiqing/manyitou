@extends('layouts.master')

@section('content')

<div id="content">
	<div class="content-bd">
		<div id="billboard-list">
			<ul>
				@foreach ($list as $item)
				<li>
					<a target="_blank" href="{{ URL::to('billboard/detail/' . $item->id . '.html') }}">{{ Str::limit($item->title, 40) }}</a>
					<span class="date">
						<a target="_blank" href="{{ URL::to('billboard/detail/' . $item->id . '.html') }}">{{ $item->created_at }}</a>
					</span>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="page">
			{{ $list->links() }}
		</div>
	</div>
</div>
@stop