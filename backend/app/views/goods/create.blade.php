@section('styles')
<link rel="stylesheet" type="text/css" href="http://admin.meipin.com/scripts/jQuery-File-Upload/css/jquery.fileupload-ui.css" media="all" />
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.upload-placeholder').fileupload({
			url: "{{ URL::to('goods/upload') }}",
			dataType: 'json',
			done: function(e, data) {
				if(data.result) {
					var id = $(this).attr('data-id');
					$('input[name="' + id + '"]').val(data.result.data);
				} else {
					alert('图片上传失败');
				}
			}
		});

		UE.getEditor('price_text');
		UE.getEditor('playform_desc');
		UE.getEditor('rules');

	});

	$('#Goods_picture').hover(function(){
		var src = $(this).val();
		if (src != '') {
			$('#picture-preview').position($(this).position());
			$('#picture-preview').attr('src', src).show();
		}
	}, function(){
		$('#picture-preview').hide();
	});




</script>
@stop

@section('content')
	<h3 class="box-header">添加活动</h3>
	{{ Form::open(array('url' => 'goods/create', 'method' => 'post', 'class' => 'form-horizontal')) }}

		@if ($errors->all())
		<div class="control-group">
			<div class="alert alert-block">
				<strong>Warning!</strong>
				@foreach($errors->all() as $item)
					<p>{{ $item }}</p>
				@endforeach
			</div>
		</div>
		@endif


		<div class="control-group">
			<label class="control-label">LOGO</label>
			<div class="controls">
				{{ Form::text('logo', Input::old('logo')) }}
				<span class="help-inline">
					<span class="btn fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
						<span>上传</span>
						<input class="upload-placeholder" type="file" name="file" data-id="logo">
					</span>
				</span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">展示广告位</label>
			<div class="controls">
				{{ Form::text('claim_image', Input::old('claim_image')) }}
				<span class="help-inline">
					<span class="btn fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
						<span>上传</span>
						<input class="upload-placeholder" type="file" name="file" data-id="claim_image">
					</span>
				</span>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">平台名称</label>
			<div class="controls">
				{{ Form::text('platform_name', Input::old('platform_name')) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">平台URL</label>
			<div class="controls">
				{{ Form::text('playform_url', Input::old('playform_url')) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">排序</label>
			<div class="controls">
				{{ Form::text('order', Input::old('order')) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">平台描述（首页）</label>
			<div class="controls">
				{{ Form::textArea('playform_sort_desc', Input::old('playform_sort_desc'), ['class' => 'span5', 'rows' => '4']) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">平台描述（详情）</label>
			<div class="controls">
				{{ Form::textArea('playform_desc', Input::old('playform_desc'), ['class' => 'span5', 'rows' => '3', 'id' => 'playform_desc', 'style' => 'height:220px']) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">规则</label>
			<div class="controls">
				{{ Form::textArea('rules', Input::old('rules'), ['class' => 'span5', 'rows' => '3', 'id' => 'rules', 'style' => 'height:220px']) }}
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">价格</label>
			<div class="controls">
				{{ Form::textArea('price_text', null, ['class' => 'span5', 'rows' => '3 ', 'id' => 'price_text', 'style' => 'height:220px']) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">状态</label>
			<div class="controls">
				{{ Form::select('status', ['1' => '在售', '0' => '停售']) }}
			</div>
		</div>
		<div class="form-actions">
			{{ Form::submit('添加', ['class' => 'btn btn-primary save']) }}
		</div>
{{ Form::close() }}
@stop
