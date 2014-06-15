@section('content')
<h3 class="box-header">活动列表</h3>
<table class="table table-striped table-bordered">
	<thead>
	<tr>
		<th>ID</th>
		<th>公告名称</th>
		<th>操作</th>
	</tr>
	</thead>
	<tbody>
	@foreach($billboard as $item)
	<tr>
		<td width="60">{{ $item->id }}</td>
		<td>{{ Str::limit($item->title, 60, '...') }}</td>
		<td width="80"><a href="{{ URL::to('billboard/update', ['id' => $item->id]) }}">修改</a> | <a href="{{ URL::to('billboard/delete', ['id' => $item->id]) }}">删除</a></td>
	</tr>
	@endforeach
	</tbody>
</table>
<div>
	{{ $billboard->links() }}
</div>
@stop