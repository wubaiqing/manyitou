<style>
/*------------------------首页------------------------------------------*/
.throughbar {
	width:1000px;
	margin:0px auto 0 auto;
	background-color: #fff;
	height: 273px;
	overflow: hidden;
}
/*广告滚动*/
.banner {
	width:690px;
	height:270px;
	float:left;
	position:relative;
	overflow:hidden;
}
/*老的广告滚动的CSS*/
.banner .tb-slide
{
	overflow:hidden;
}
.banner .img-box {
	height: 225px;
	position: absolute;
	width: 690px;
}
#adv_show {
	position:relative;
	width:690px;
	height:270px;
	overflow:hidden;
}
.adv_pic {
	position:absolute;
	top:0;
	left:0;
}
.adv_pic li, .adv_pic li a {
	float:left;
	width:690px;
	height:270px;
	display:block;
}
.adv_pic li img {
	width:690px;
	height:270px;
	display:block;
}
.adv_num_nav_bg{background:#000;
	top:245px;
	filter: Alpha(Opacity=80);
	opacity:0.8;
	width:690px;
	height:22px;
	padding-top:3px;
	position:absolute;
	left:0;
}
.adv_num_nav {
	width:690px;
	height:22px;
	padding-top:3px;
	position:absolute;
	left:0;
	top:245px;
}
.adv_num_nav ul {
	float:right;
	margin-right:5px;
}
.adv_num_nav ul li {
	height:18px;
	line-height:18px;
	color:#fff;
	float:left;
	width:20px;
	text-align:center;
	cursor:pointer;
}
.adv_num_nav ul .on {
	background:#ff6d00;
}
/*登陆框*/
.login {
	float:right;
	width:300px;
	overflow:hidden;
}
#index_login .tabs {
	float:left;
}

#index_login .tabs li{
	float:left;
	height: 38px;
	background:#fbfbfb;
	width:300px;
	color:#666;
	text-align:center;
	line-height:38px;
	font-size:14px;
	font-weight:bold;
	border:1px solid #eee;
	border-bottom:1px solid #ff7609;
	cursor:pointer;
}

#index_login .tabs .selected{
	background:#ff7609;
	color:#fff;
	border:1px solid #ff7609;

}
#index_login .tabs_con{border:1px solid #eee;border-top:0;padding:20px;height:191px;overflow:hidden;}


#index_login .input_text {
	width: 163px;
	height:24px;
	border:1px solid #ddd;
}
#index_login .input_text_short {
	width: 60px;
	height:23px;
	border:1px solid #ddd;
}
#index_login table th {
	font-size: 14px;
	font-weight: normal;
	height:22px;
	padding:2px 0;
	text-align: right;
	width: 45px;
}
#index_login table td {
	height:22px;
	padding:5px 0;
}
.reg_btn {width:300px;margin-left:-20px;}
.reg_btn a{ background:#f4f4f4;display:block;width:300px;text-align:center;height:35px;line-height:35px;margin-top:3px;}
.reg_btn a:hover{background:#eee;color:#f00;text-decoration:none;}
.login_btn {
	background:url(../images/login_btn.png) no-repeat;
	width:94px;
	height:34px;
	line-height:34px;
	text-align:center;
	display:inline-block;
	font-size:14px;
	font-weight:bold;
}
.login_btn:link,.login_btn:visited{color:#fff;}
.login_btn:hover {
	background:url(../images/login_btn_hover.png) no-repeat 0 0;
	text-decoration:none;
}
.log_on_info {
	background: none repeat scroll 0 0 #FFF9E1;
	border: 1px solid #DCDCDC;
	font-weight: bold;
	padding: 10px;
	width: 210px;
}
.log_on_info  p{line-height:30px;}
.log_on_info  p a:link,.log_on_info  p a:visited{color:#999;}
.log_on_btn{margin-top:20px;}
.log_on_btn a {
	background: url("../images/log_on_bg.gif") repeat-x scroll 0 0 transparent;
	border: 1px solid #F25601;
	color: #FFFFFF;
	display: block;
	font-size: 14px;
	font-weight: bold;
	height: 28px;
	line-height: 28px;
	margin-left: 25px;
	text-align: center;
	width: 180px;
}
.log_on_menu {
	padding-top:10px;
	border-top:1px solid #eee;
	margin-top: 10px;
	text-align: center;
	width: 230px;
}
.log_on_menu a {
	margin: 0 5px;
}
/*多麦公告、活动信息*/
.news  .news_box {
	float:left;
	width:318px;
	border:1px solid #eee;
	margin-right:10px;
}
.news  .last{margin-right:0;}
.news_box  h3{background:#f8f8f8;border-bottom:1px solid #eee;color:#fe5a00;height:35px;line-height:35px;padding-left:10px;}
.news_box  h3 a{float:right;margin-right:10px;font-size:12px;font-weight:normal;font-family:"宋体"}
.news_box  h3 a:link,.news_box  h3 a:visited{color:#999;}
.news_box ul{margin:0 10px;width:308px;float:left;padding:10px 0}
.news_box li {height:28px;line-height:28px;border-bottom:1px dotted #eee;float:left;}
.news_box li em,.news_box li a ,.news_box li span{float:left;}
.news_box li a {width:250px;overflow:hidden;height:28px;line-height:28px;}
.news_box li span{color:#ccc;width:35px;}
.news_box li em{color:#fff;float:left;font-family:Arial;font-size:10px;width:12px;height:11px;line-height:11px;text-align:center;margin:9px 0 0 0}
.news_box li .orange_bg{background:#fe7409;}
.news_box li .blue_bg{background:#a4c5fa}


.flash_item {
	position: absolute;
	right: 30px;
	bottom: 10px;
	height: 18px;
	padding-top: 2px;
}

.flash_item li {
	background-color: #FFE0EB;
	border: 1px solid #FF6699;
	color: #D94B01;
	cursor: pointer;
	float: left;
	font-size: 12px;
	height: 16px;
	line-height: 16px;
	margin-left: 3px;
	text-align: center;
	width: 16px;
}

.flash_item li.on {
	background-color: #EB3C65;
	border-color: #9A102F;
	color: #FFFFFF;
	font-weight: bold;
	height: 18px;
	line-height: 18px;
	margin-top: -2px;
	width: 18px;
}

.flash_item li img {
	display: block
}


.tabs_con ul li {
	height:30px;
	line-height: 30px;
}

#login-top {
	height:173px;
}

</style>
<div class="throughbar">

<script type="text/javascript" src="/statics/js/slideimg.js"></script>
<div class="banner fl">
	<div id="J_SlidePlayer_510" class="tb-slide">
		<ul class="img-box" style="">
			<li>
				<a href="javascript:void(0)" target="_blank" onclick="ads_place_report(3)">
					<img src="http://myt.oss-cn-hangzhou.aliyuncs.com/static/banner/1.jpg" border="0" width="690" height="270">
				</a>
			</li>
		</ul>
		<ul class="flash_item">
			<li class="">1</li>
		</ul>
	</div>
	<script type="text/javascript">
		$("#J_SlidePlayer_510").slideImg({
			speed: "normal",
			timer: 3000
		});
	</script>
	<span style="position:absolute;right:10px;bottom:11px;width:14px;height:16px;background:url('/statics/images/ico/33.png');cursor:pointer;" title="换一组" id="replace_focus"></span>
	<script type="text/javascript">
		$("#replace_focus").click(function(){
			$.ajax({
				type:'GET',
				dataType:'json',
				url:'index.php?m=index&a=getFocusImg',
				success:function(data){
					var aList=$('.img-box li a');
					var imgList=$('.img-box li a img');
					for(var i in data)
					{
						imgList.eq(i).attr('src','/uploads/'+data[i]['img']);
						aList.eq(i).attr('href',data[i]['url']);
						imgList.eq(i).attr('title',data[i]['title']);
					}
				}
			});
		});
	</script>
</div>
<div class="login" id="index_login">
		<ul class="tabs">
			<li class="selected">网站公告</li>
		</ul>
	<div class="clear"></div>
	<!--网站主登陆  -->
	<div class="tabs_con" style="display: block;">
		<div id="login-top">
		<ul>
			@foreach ($billboard as $item)
			<li><a target="_blank" href="{{ URL::to('billboard/detail/' . $item->id . '.html') }}">{{ Str::limit($item->title, 40) }}</a></li>
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