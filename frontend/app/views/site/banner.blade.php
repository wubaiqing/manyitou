<div class="throughbar">
	<div class="banner fl">
		<div id="J_SlidePlayer_510" class="tb-slide">
			<ul class="img-box" style="">
				@foreach ($banner as $key => $item)
				<li index="{{ $key }}" style="background:#{{ $item->color }} url({{ $item->image}}) no-repeat 50% 50%;">
					<a target="_blank" href="{{ !empty($item->url && strstr($item->url, 'http://')) ? $item->url : 'javascript:void(0);' }}">
						<img src="{{ $item->image }}" border="0" width="690" height="270">
					</a>
				</li>
				@endforeach
			</ul>
			<ul class="flash_item">
			</ul>
		</div>
		<script type="text/javascript">
		</script>
	</div>

	<style>
		.head-top-login {
			height: 104px;
		}
		.head-top-login a{
			color: white;
			display: inline-block;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			-ms-border-radius: 2px;
			-o-border-radius: 2px;
			border-radius: 2px;
			width: 130px;
			margin-right: 20px;
			height: 32px;
			line-height: 32px;
			float: left;
			text-align: center;
			cursor: pointer;
			text-decoration: none;
		}

		.head-top-login span {
		}

		.head-top-login .login-1 {
			background-color: #f04848;
			margin-top: 30px;
		}

		.head-top-login .login-2 {
			margin-top: 30px;
			background-color: #2e76a8;

		}
		.login {
			float: right;
			width: 300px;
			overflow: hidden;
		}
	</style>

	<div class="login" id="index_login">
		<div class="head-top-login">
			<a href="#" target="_blank" class="login-1">登录</a>
			<a href="#" target="_blank" class="login-2">注册</a>
		</div>
		<ul class="tabs">
			<li class="selected">
				<a href="{{ URL::to('billboard/list.html') }}">网站公告</a>
			</li>
		</ul>
		<div class="clear"></div>
		<!--网站主登陆  -->
		<div class="tabs_con" style="display: block;">
			<div id="login-top">
				<ul>
					@foreach ($billboard as $key => $item)
					<li><a target="_blank" href="{{ URL::to('billboard/detail/' . $item->id . '.html') }}">{{ ($key + 1)}}、{{ Str::limit($item->title, 40) }}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="reg_btn">
				<a href="{{ URL::to('billboard/list.html') }}">查看更多</a>
			</div>

		</div>
		<!--圆角底部-->
	</div>
	<div class="clear"></div>
</div>

