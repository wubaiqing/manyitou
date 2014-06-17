<div id="billboard" class="clearfix">
	<h3>
		网站公告：
		<span class="date"><a href="{{ URL::to('billboard/list.html') }}" target="_blank">查看更多</a></span>
	</h3>
	<ul>
		@foreach ($billboard as $item)
		<li><a target="_blank" href="{{ URL::to('billboard/detail/' . $item->id . '.html') }}">{{ Str::limit($item->title, 40) }}</a></li>
		@endforeach
	</ul>
</div>
