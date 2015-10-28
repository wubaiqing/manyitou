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
                            <div class="main">资源名称</div>
                            <div class="usenum-160 cur" >网址</div>
                            <div class="dyuz">类型</div>
                            <div class="usenum-100 cur">适合推广平台</div>
                            <div class="ljxq">适合推广类目</div>
                            <div class="usenum-100 cur">费用</div>
                            <div class="ljxq">联系方式</div>
                            <div class="usenum-100 cur">&nbsp;</div>
                        </div>
                        @foreach ($goods as $item)
                        <div class="list-c clearfix">
                            <div class="uvnum" style="width: 160px;">
                                {{ $item['platform_name'] }}
                            </div>
                            <div class="uvnum" style="width: 160px;">
                                <a href="{{ $item['playform_url'] }}" target="_blank" class="link">{{ $item['playform_url']}}</a>
                            </div>
                            <div class="uvnum">
                                {{ Goods::$typs[$item['type']] }}
                            </div>
                            <div class="uvnum">
                                {{ Goods::$generalizePlatforms[$item['generalize_platform']] }}
                            </div>
                            <div class="uvnum"  style="width:139px;">
                                {{ Goods::$generalizeTypes[$item['generalize_type']] }}
                            </div>
                            <div class="uvnum">
                                {{ Goods::$cooperationTypes[$item['cooperation_type']] }}
                            </div>
                            <div class="uvnum" style="width: 139px;">
                                {{ $item['contact'] }}
                            </div>
                            <div class="uvnum">
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
