@section('content')
	<h3 class="box-header">添加活动</h3>
	{{ Form::open(array('url' => 'goods/create', 'method' => 'put')) }}

	{{ Form::close() }}


@stop