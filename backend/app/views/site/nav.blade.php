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
				广告管理
			</h4>
		</li>
		<li>
			<a href="{{ URL::to('billboard/create') }}">
				添加广告
			</a>
		</li>
		<li>
			<a href="{{ URL::to('billboard/admin') }}">
				广告管理
			</a>
		</li>
		<li class="nav-header">
			<h4>
				系统
			</h4>
		</li>
		<li>
			<a href="{{ URL::to('logout') }}">
				退出登陆
			</a>
		</li>
</div>
