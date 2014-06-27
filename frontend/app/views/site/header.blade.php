<style>
	/*首页头部*/
	.index_header{ margin-bottom:10px; background-color: #fff;}
	.header_info .top_nav{ float:right; margin-top:36px;}

	.index_nav{ height:40px; background:url(../images/index_navbg.gif) repeat-x;}
	.main_nav{ width:980px; margin:0 auto;}
	.main_nav ul{ float:left; height:34px; line-height:34px; margin-top:6px;}
	.main_nav ul li{ float:left; padding-right:5px;}
	.main_nav ul li a{ font-size:14px; font-weight:700; color:#FFF;padding:0 18px 0 18px; text-decoration:none; float:left; }
	.main_nav ul li.selected{ background:url(../images/nav_selbg.gif) no-repeat right;}
	.main_nav ul li.selected a{ color:#ff6d00; background:url(../images/nav_selbg.gif) no-repeat left;}
	/*网站主头部*/
	.siter_header{ width:980px; margin:0 auto;margin-bottom:17px;}
	/* mc */
	.mc_header{ background:url(../images/ny_header.jpg) no-repeat center top;}
	/* mc */
	.header_info{ width:980px; margin:0 auto; height:75px;}
	.header_info .logo{ width:256px; height:58px; display:inline-block; float:left; background:url(http://myt.oss-cn-hangzhou.aliyuncs.com/static/logo_03.png) no-repeat; text-indent:-999px; margin-top:10px; }
	.header_info .user_info{ float:right; margin-top:34px; height:31px; background:url(../images/header_userbg.gif) no-repeat left; height:31px;}
	.header_info .user_info li{ float:left; display:inline; height:31px; line-height:31px; margin-left:15px;}
	.header_info .user_info li.last{background:url(../images/header_userbg.gif) no-repeat right; padding-right:15px;}
	.header_info .user_info li.msg{ background:url(../images/msg_icon.gif) no-repeat 0 10px; padding-left:20px;}

	.overall{margin:0 auto;width:980px;}
	/*导航*/
	#nav {
		background:url(http://myt.oss-cn-hangzhou.aliyuncs.com/static/nav_bg.png) repeat-x 0 0;
		height:45px;
	}
	#nav ul {
		height:45px;
		width:700px;
		float:left;
	}
	#nav li{float:left;height:45px;line-height:45px;font-size:14px;font-weight:bold;width:100px;text-align:center;}
	#nav .last{background:none;}
	#nav li a {
		width:100px;
		float:left;
		height:45px;
		line-height:45px;
	}
	#nav li a:link, #nav li a:visited {
		color:#fff;
	}
	#nav .selected{
	}
	#nav .search{float:right;height:27px;margin:9px 0;width:179px;}
	#nav .search .input{width:96px;float:left;padding-left:30px;border:0;background:url(../images/search.png) no-repeat 0 0;}
	#nav .search .btn{float:left;border:0;width:49px;text-align:center;color:#666;background:url(../images/search.png) no-repeat -130px 0;height:27px;line-height:27px;font-weight:bold;}

	/*子菜单*/
	#sub_nav {
		height:33px;
		background:#f4f4f4;
		border-bottom:1px solid #ededed
	}
	#sub_nav ul {
		width:980px;
		margin:0 auto;
		overflow:hidden;
		height:33px;
	}
	#sub_nav ul li {
		float:left;
		margin:0 20px;
		height:33px;
		line-height:33px;
		padding:0 0 0 10px;
	}
	#sub_nav ul li a {
		float:left;
		padding-right:10px;
	}
	#sub_nav ul .active {
		float:left;
		padding:0 0 0 10px;
	}
	#sub_nav ul .active a {
		float:left;
		padding-right:10px;
	}
	#sub_nav ul .active a:link, #sub_nav ul .active a:visited {
		color:#ff6d00
	}
	#position {
		width:980px;
		margin:0 auto;
		margin-top:10px;
	}

</style>
<div class="index_header">
	<div class="header_info">
		<a href="/index.php" class="logo" alt="多麦CPS广告联盟">多麦CPS广告联盟</a>
		<div class="top_nav">
			<div class="fl" style="height:20px;margin-right:5px;">
				<a href="/index.php?m=app&amp;a=index" style="display:none;">手机客户端</a> <span class="gray">|</span> <a id="setHomepage" href="javascript:void(0);">设为首页</a> <span class="gray">|</span> <a href="javascript:bookmark();">加入收藏</a> </div>
		</div>
	</div>
	<div id="nav">
		<div class="overall">
			<ul>
				<li class="selected">
					<a href="/index.php" title="首页">首页</a>
				</li>
				<li>
					<a href="http://www.manyitou.com/lists.html" title="资源中心">资源中心</a>
				</li>
				<li>
					<a href="http://www.manyitou.com/billboard/detail/2.html" title="淘宝入驻">淘宝入驻</a>
				</li>
				<li>
					<a href="http://www.manyitou.com/billboard/detail/1.html" title="关于满意投">关于满意投</a>
				</li>
			</ul>
		</div>
	</div>
</div>