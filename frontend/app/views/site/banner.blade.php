<div class="throughbar">
    <div class="banner fl">
        <div id="J_SlidePlayer_510" class="tb-slide">
            <ul class="img-box" style="">
                @foreach ($banner as $key => $item)
                <li index="{{ $key }}" style="background:#{{ $item->color }} url({{ $item->image}}) no-repeat 50% 50%;">
                    <img src="{{ $item->image }}" border="0" width="690" height="270">
                </li>
                @endforeach
            </ul>
            <ul class="flash_item">
            </ul>
        </div>
        <script type="text/javascript">
            $("#J_SlidePlayer_510").slideImg({
                speed: "normal",
                timer: 3000
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
