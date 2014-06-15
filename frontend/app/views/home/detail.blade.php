<div class="main clearfix">
	<div class="appContent clearfix">
		<div class="appList">
			<div class="con_wrap">
				<div class="mid-nav">
					<span><a href="/">满意投</a></span>
					<span class="sep"> &gt; </span>
					<span><a href="{{ URL::to('lists.html')}}">活动中心</a></span>
					<span class="sep"> &gt; </span>
					<span><a href="">一折网(原名淘牛品）</a></span>
				</div>
				<div class="list">
					<div class="list-t">
						<div class="siteinfo">网站信息</div>
						<div class="sitegobuy">活动价格</div>
					</div>
					<div class="list-c clearfix">
						<div class="list-left">
							<a href="" class="img" target="_blank">
								<img src="{{ $detail['logo'] }}">
							</a>

							<div class="site-info">
								<div class="siteinfo-top">
									<h3>{{ $detail['platform_name'] }}<i class="wz"></i></h3>
									<span class="wz-info">{{ $detail['playform_desc'] }}</span>
									<span class="link">
										<a href="{{ $detail['playform_url'] }}" target="_blank">{{ $detail['playform_url'] }}</a>
									</span>
								</div>
								<div class="siteinfo-bottom">
									<h3>活动要求<i class="uz"></i></h3>
									<span class="uz-intro">
										{{ $detail['rules'] }}

									</span>
									<span class="link"><a href="" target="_blank"></a></span>
								</div>
							</div>
						</div>
						<div class="list-right">
							<div class="right-content">
								{{ $detail['price_text'] }}
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="about" class="clearfix">
		<div class="content-navbar" id="J-content-navbar">
			<ul>
				<li div-id="deal-record" class="content-navbar__item--current">
					<a href="javascript:;" class="tab-item">广告位</a>
				</li>
			</ul>
		</div>
		<div id="deal-record" style="display:block;">
			<a href="{{ $detail['claim_image'] }}" class="imageBox">
				<img src="{{ $detail['claim_image'] }}" />
			</a>
		</div>
	</div>


</div>