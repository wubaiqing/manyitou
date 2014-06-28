@section('content')
<h3 class="box-header">活动列表</h3>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>填充色</th>
        <th>图片</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($banner as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td><span style="display: block; width: 20px; height: 20px; background-color: #{{ $item->color }};"></span></td>
        <td><a target="_blank" href="{{ $item->playform_url }}"><img src="{{ $item->image }}" width="80"/> </a></td>
        <td><a href="{{ URL::to('banner/update', ['id' => $item->id]) }}">修改</a> | <a href="{{ URL::to('banner/delete', ['id' => $item->id]) }}">删除</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
<div>
    {{ $banner->links() }}
</div>
@stop
