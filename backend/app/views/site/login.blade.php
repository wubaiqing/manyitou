@section('content')
<div class="container">
	<div class="box span6 offset2" style="margin-top: 80px;">
		{{ Form::open(array('url' => '', 'method' => 'post', 'class' => 'form-horizontal')) }}

			<!-- 错误提示 -->
			@if (Session::get('error'))
				<div class="alert alert-danger">{{ Session::get('error') }}</div>
			@endif

			<div class="control-group">
				<label class="control-label" for="name">帐号</label>
				<div class="controls">
					<input type="text" id="name" name="name" />
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="password">密码</label>
				<div class="controls">
					<input type="password" id="password" name="password" />
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary">登录</button>
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>
@stop