<div id="billboard">
	<div id="billboard-left">
		<span>网站公告：</span>
	</div>
	<div id="billboard-right">
		<ul>
			@foreach ($billboard as $item)
			<li><a href="">{{ $item->title }}</a></li>
			@endforeach
		</ul>
	</div>
</div>
