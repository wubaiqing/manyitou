<style>
    .itemmore-block {
        width: 998px;
        height: 150px;
        overflow: hidden;
    }

    .itemmore {
        height: 25px;
        line-height: 25px;
        overflow: hidden;
        color: #999;
        margin-top: 10px;
        margin-left: 20px;
    }

    .item-dt {
        text-align: left;
        width: 80px;
        float: left;
    }

    .item-dl a {
        border-radius: 2px;
        padding: 3px 7px;
        text-decoration: none;
    }
    .item-dl a:hover {
        background-color: #f87d2d;
        color: white;
        padding: 3px 7px;
    }
    .item-dl a.cur {
        background-color: #f87d2d;
        color: white;
        padding: 3px 7px;
    }
</style>

<div class="content-bd itemmore-block" id="wbw">
    <div class="itemmore">
        <div class="item-dt">推广类型:</div>
        <div class="item-dl">
            @foreach( Goods::$types as $key => $item )
                <a class="{{ $type == $key ? 'cur' : '' }}" href="{{ URL::to("?type=$key&generalize_type=$generalizeType&generalize_platform=$generalizePlatform&cooperation_type=$cooperationType" ) }}">{{ $item }}</a>
            @endforeach
        </div>

    </div>

    <div class="itemmore">
        <div class="item-dt">推广类目:</div>
        <div class="item-dl">
            @foreach( Goods::$generalizeTypes as $key => $item )
                <a class="{{ $generalizeType == $key ? 'cur' : '' }}" href="{{ URL::to("?type=$type&generalize_type=$key&generalize_platform=$generalizePlatform&cooperation_type=$cooperationType") }}">{{ $item }}</a>
            @endforeach
        </div>

    </div>
    <div class="itemmore">
        <div class="item-dt">推广平台:</div>
        <div class="item-dl">
            @foreach( Goods::$generalizePlatforms as $key => $item )
                <a class="{{ $generalizePlatform == $key ? 'cur' : '' }}" href="{{ URL::to("?type=$type&generalize_type=$generalizeType&generalize_platform=$key&cooperation_type=$cooperationType") }}">{{ $item }}</a>
            @endforeach
        </div>

    </div>
    <div class="itemmore">
        <div class="item-dt">合作方式:</div>
        <div class="item-dl">
            @foreach( Goods::$priceTypes as $key => $item )
                <a class="{{ $cooperationType == $key ? 'cur' : '' }}" href="{{ URL::to("?type=$type&generalize_type=$generalizeType&generalize_platform=$generalizePlatform&cooperation_type=$key") }}">{{ $item }}</a>
            @endforeach
        </div>

    </div>
</div>