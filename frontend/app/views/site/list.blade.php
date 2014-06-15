@extends('layouts.master')

@section('content')

<!-- 商品列表 -->
	<div id="content">
		<div class="main clearfix">
			<div class="appContent clearfix">
				<div class="appList">
					<div class="con_wrap">
						<div class="mid-nav"><span><a href="/">满意投</a></span>
							<span class="sep"> > </span>
							<span><a href="{{ URL::to('lists.html')}}">活动中心</a></span>
						</div>
						<div class="list">
							<div class="list-t">
								<div class="main">logo</div>
								<div class="usenum cur">平台</div>
								<div class="dyuz">图示广告位</div>
								<div class="usenum cur">活动要求</div>
								<div class="usenum">活动价格</div>
								<div class="ljxq cur">了解详情</div>
							</div>
							@foreach ($goods as $item)
							<div class="list-c clearfix">
								<div class="pic-item">
									<a href="{{ URL::to('detail/' . $item['id'] . '.html') }}" target="_blank">
										<img src="{{ $item['logo'] }}" class="lazy-index-logo"
											 data-original="{{ $item['logo'] }}"">
									</a>
								</div>
								<div class="text-item">
									<h3>{{ $item['platform_name'] }}</h3>

									<div class="intro">
									<span>
										{{ $item['playform_sort_desc'] }}
									</div>
									<a href="{{ $item['playform_url'] }}" target="_blank" class="link">{{ $item['playform_url']
										}}</a>
								</div>
								<div class="uvnum">
									<a href="{{ $item['claim_image'] }}" class="imageBox">
										<img data-original="{{ $item['claim_image'] }}"
											 src="http://l.com/static/css/images/image_bg.jpg" class="lazy-index-image"
											 width="180"/>
									</a>
								</div>
								<div class="likenum">
									{{ $item['rules'] }}
								</div>
								<div class="likenum">
									<span class="product-name">{{ $item['platform_name'] }}今日特惠：</span>

									<div>
										{{ $item['price_text'] }}
									</div>
								</div>
								<div class="uptime">
									<a href="{{ URL::to('/detail/' . $item['id'] . '.html') }}" target="_blank">
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
<!-- End 商品列表 -->

@include('home.footer')

@stop

