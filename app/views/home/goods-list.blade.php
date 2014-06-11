<div class="main clearfix">
	<div class="appContent clearfix">
		<div class="appList">
			<div class="con_wrap">
				<div class="mid-nav"><span><a href="/">简世网络</a></span>
					<span class="sep"> > </span>
					<span><a href="/index.php/AdPosition/adPositionlist">活动中心</a></span>
					<div class="search">
						<div class="select">排序：
							<select name="order">
								<option value="rank" selected="selected">默认排序</option>
								<option value="uv">使用人数</option>
								<option value="fee">价格低->高</option>
								<option value="sell_cnt">销量高->低</option>
							</select>
						</div>
						<form action="/index.php/AdPosition/adPositionlist" method="get" style="float:left;"
						      target="_top">
							<div class="seek-input">
								<input type="text" name="namekey" class="txt" title="输入平台/产品名称查找" value="">
							</div>
							<div class="seek-btn">
								<input type="submit" value="搜索" class="btn">
							</div>
						</form>
					</div>
				</div>
				<div class="list">
					<div class="list-t">
						<div class="main">logo</div>
						<div class="usenum cur" style="width:210px;">平台</div>
						<div class="dyuz">图示广告位</div>
						<div class="usenum cur">活动价格</div>
						<div class="ljxq">了解详情</div>
					</div>
					@foreach ($goods as $item)
					<div class="list-c clearfix">
						<div class="pic-item">
							<a href="{{ $item['id'] }}" target="_blank">
								<img src="{{ $item['logo'] }}">
							</a>
						</div>
						<div class="text-item">
							<h3>{{ $item['platform_name'] }}</h3>

							<div class="intro">
								<span>
									{{ $item['playform_sort_desc'] }}
							</div>
							<a href="{{ $item['playform_url'] }}" target="_blank" class="link">{{ $item['playform_url'] }}</a>
						</div>
						<div class="uvnum">
							<img src="{{ $item['claim_image'] }}" width="220" height="120" />
						</div>
						<div class="likenum">
							<span class="product-name">一折网今日特惠：</span>
							<div>
								{{ $item['price_text'] }}
							</div>
						</div>
						<div class="uptime">
							<a href="{{ $item['id'] }}" target="_blank">
								<img src="/static/css/images/ckxq.png">
							</a>
						</div>
					</div>
					@endforeach
					<div style="clear:both;_border-bottom:#ebebeb 1px solid;"></div>
						<div class="page">
							{{ $goods->links() }}
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>