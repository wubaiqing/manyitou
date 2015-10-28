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
        width: 110px;
        float: left;
    }

    .item-dl a {
        padding: 0 7px;

    }


</style>
<div class="content-bd itemmore-block">
    <div class="itemmore">
        <div class="item-dt">类型:</div>
        <div class="item-dl">
            @foreach( Goods::$types as $key => $item )
                <a href="#">{{ $item }}</a>
            @endforeach
        </div>

    </div>

    <div class="itemmore">
        <div class="item-dt">适合推广类目:</div>
        <div class="item-dl">
            @foreach( Goods::$generalizeTypes as $key => $item )
                <a href="#">{{ $item }}</a>
            @endforeach
        </div>

    </div>
    <div class="itemmore">
        <div class="item-dt">适合推广平台:</div>
        <div class="item-dl">
            @foreach( Goods::$generalizePlatforms as $key => $item )
                <a href="#">{{ $item }}</a>
            @endforeach
        </div>

    </div>
    <div class="itemmore">
        <div class="item-dt">合作方式:</div>
        <div class="item-dl">
            @foreach( Goods::$priceTypes as $key => $item )
                <a href="#">{{ $item }}</a>
            @endforeach
        </div>

    </div>
</div>