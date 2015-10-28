@extends('layouts.master')

@section('content')

<div id="content">
    <div class="main clearfix">
        <div class="appContent clearfix">
            <div class="appList">
                <div class="con_wrap">
                    <div class="mid-nav">
                        <span><a href="/">满意投</a></span>
                        <span class="sep"> &gt; </span>
                        <span><a href="{{ URL::to('lists.html')}}">活动中心</a></span>
                        <span class="sep"> &gt; </span>
                        <span><a href="#">{{ $detail['platform_name'] }}</a></span>
                    </div>
                    <div class="list">
                        <div class="list-t">
                            <div class="siteinfo">网站信息</div>
                            <div class="sitegobuy">简介</div>
                        </div>
                        <div class="list-c clearfix">
                            <div class="list-left">
                                <a href="" class="img" target="_blank">
                                    <img src="{{ $detail['logo'] }}">
                                </a>

                                <div class="site-info">
                                    <div class="siteinfo-top">
                                        <span class="wz-info">
                                            <span>资源名称</span>
                                            {{ $detail['platform_name'] }}
                                        </span>

                                        <span class="wz-info">
                                            <span>网址</span>
                                            <a href="{{ $detail['playform_url'] }}" target="_blank">{{ $detail['playform_url'] }}</a>
                                        </span>

                                        <span class="wz-info">
                                            <span>类型</span>
                                            {{ Goods::$types[$detail['type']] }}
                                        </span>

                                        <span class="wz-info">
                                            <span>适合推广平台</span>
                                            {{ Goods::$generalizePlatforms[$detail['generalize_platform']] }}
                                        </span>

                                        <span class="wz-info">
                                            <span>适合推广类目</span>
                                            {{ Goods::$generalizeTypes[$detail['generalize_type']] }}
                                        </span>

                                        <span class="wz-info">
                                            <span>适合推广类目</span>
                                            {{ Goods::$generalizeTypes[$detail['generalize_type']] }}
                                        </span>

                                        <span class="wz-info">
                                            <span>费用</span>
                                            {{ Goods::$cooperationTypes[$detail['cooperation_type']] }}
                                        </span>

                                        <span class="wz-info">
                                            <span>联系方式</span>
                                            <a href="javascript:void(0);" class="look" data-id="{{ $detail['id'] }}" data-contact="暂时保密">查看</a>
                                        </span>

                                    </div>
                                </div>
                            </div>
                            <div class="list-right">
                                <div class="right-content">
                                    {{ $detail['playform_desc'] }}
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($detail['claim_image'])
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
        @endif

        <div id="about" class="clearfix">
            <div class="content-navbar" id="J-content-navbar">
                <ul>
                    <li div-id="deal-record" class="content-navbar__item--current">
                        <a href="javascript:;" class="tab-item">推荐理由</a>
                    </li>
                </ul>
            </div>
            <div id="deal-record" style="display:block;">
                {{ $detail['recommended_desc'] }}
            </div>
        </div>
    </div>
</div>

@stop
