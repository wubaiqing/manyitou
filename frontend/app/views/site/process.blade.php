<style>
    #content .content-bd {
        margin: 10px auto;
        width: 998px;
        background-color: white;
        overflow: hidden;
    }
    .content-bd .process-a{
        display: block;
        text-decoration:none;
        width: 300px;
        height: 35px;
        overflow: hidden;
        text-align: center;
        float: left;
        border-right: 3px solid #dcdcdc;
        padding-top: 10px;
        background-color: white;
        padding-right: 30px;;
    }
</style>
<div class="content-bd" style="height: 35px;">
    @foreach ($billboard as $key => $item)
        @if ($key == 2)
            <a class="process-a" href="{{ URL::to('billboard/detail/' . $item->id . '.html') }}" target="_blank" style="border: none;">
                <div>{{ ($key + 1)}}、{{ Str::limit($item->title, 40) }}</div>
            </a>
        @else
            <a class="process-a" href="{{ URL::to('billboard/detail/' . $item->id . '.html') }}" target="_blank">
                <div>{{ ($key + 1)}}、{{ Str::limit($item->title, 40) }}</div>
            </a>
        @endif
    @endforeach

    <a  class="process-a" href="javascript:void(0);" target="_blank" >
        <div>满意投商家交流群：238792494</div>
    </a>
    <div class="clearfix"></div>
</div>
