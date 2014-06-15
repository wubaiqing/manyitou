@section('content')
<h3 class="box-header">活动列表</h3>
<table class="table table-striped table-bordered">
	<thead>
	<tr>
		<th>ID</th>
		<th>平台名称</th>
		<th>URL</th>
		<th>操作</th>
	</tr>
	</thead>
	<tbody>
	@foreach($goods as $item)
	<tr>
		<td>{{ $item->id }}</td>
		<td><a target="_blank" href="{{ URL::to('detail/' . $item->id . '.html')}}">{{ $item->platform_name }}</a></td>
		<td><a target="_blank" href="{{ $item->playform_url }}">{{ $item->playform_url }}</a></td>
		<td>修改 | 删除</td>
	</tr>
	@endforeach
	</tbody>
</table>
<div>
	{{ $goods->links() }}
</div>
@stop