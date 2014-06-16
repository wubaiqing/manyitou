<div class="span2 mt10">
	<ul class="nav nav-list pagination-centered">
		<li class="nav-header">
			<h4>
				活动管理
			</h4>
		</li>
		<li>
			<a href="{{ URL::to('goods/create') }}">
				添加活动
			</a>
		</li>
		<li>
			<a href="{{ URL::to('goods/admin') }}">
				活动管理
			</a>
		</li>
		<li class="nav-header">
			<h4>
				公告管理
			</h4>
		</li>
		<li>
			<a href="{{ URL::to('billboard/create') }}">
				添加公告
			</a>
		</li>
		<li>
			<a href="{{ URL::to('billboard/admin') }}">
				公告管理
			</a>
		</li>
		<li class="nav-header">
			<h4>
				Banner
			</h4>
		</li>
		<li>
			<a href="{{ URL::to('banner/create') }}">
				添加BANNER
			</a>
		</li>
		<li>
			<a href="{{ URL::to('banner/admin') }}">
				管理BANNER
			</a>
		</li>
		<li class="nav-header">
			<h4>
				系统
			</h4>
		</li>
		<li>
			<a href="{{ URL::to('clearCache') }}">
				清空缓存
			</a>
		</li>
		<li>
			<a href="{{ URL::to('logout') }}">
				退出登陆
			</a>
		</li>
</div>
