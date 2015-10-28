<style>
    .itemmore-block {
        width: 998px;
        height: 150px;
        overflow: hidden;
        padding-top: 10px;
    }

    .itemmore {
        height: 22px;
        overflow: hidden;
        color: #999;
    }

    .item-dt {
        text-align: left;
        width: 50px;
        float: left;
    }


</style>
<div class="content-bd itemmore-block">
    <div class="itemmore">
        <div class="item-dt">类型</div>
        <div>
            @foreach( Goods::$types as $key => $item )
                <a href="#">{{ $item }}</a>
            @endforeach
        </div>

    </div>

    <div class="itemmore">
        <div class="item-dt">类目</div>
        <div>
            @foreach( Goods::$generalizeTypes as $key => $item )
                <a href="#">{{ $item }}</a>
            @endforeach
        </div>

    </div>
    <div class="itemmore">
        <div class="item-dt">平台</div>
        <div>
            @foreach( Goods::$generalizePlatforms as $key => $item )
                <a href="#">{{ $item }}</a>
            @endforeach
        </div>

    </div>
    <div class="itemmore">
        <div class="item-dt">方式</div>
        <div>
            @foreach( Goods::$priceTypes as $key => $item )
                <a href="#">{{ $item }}</a>
            @endforeach
        </div>

    </div>
</div>