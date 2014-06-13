@section('styles')
<link rel="stylesheet" type="text/css" href="http://admin.meipin.com/scripts/jQuery-File-Upload/css/jquery.fileupload-ui.css" media="all" />
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script>
	$(document).ready(function () {
		$('.upload-placeholder').fileupload({
			url: "{{ URL::to('admin/upload') }}",
			dataType: 'json',
			done: function(e, data) {
				if(data.result.success) {
					$('#Goods_picture').val(data.result.path);
				} else {
					alert(data.result.message);
				}
			}
		});
	});
</script>
@stop

@section('content')
	<h3 class="box-header">添加活动</h3>
	{{ Form::open(array('url' => 'goods/create', 'method' => 'post', 'class' => 'form-horizontal')) }}
		<div class="control-group">
			<label class="control-label">LOGO</label>
			<div class="controls">
				{{ Form::text('logo') }}
				<span class="help-inline">
					<span class="btn fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
						<span>上传</span>
						<input class="upload-placeholder" type="file" name="file">
						<img src="about:blank" width="200" style="position: absolute; z-index: 9999; margin-left: 4px;" id="picture-preview" class="hide" />
					</span>
				</span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">规则</label>
			<div class="controls">
				{{ Form::textArea('rules', null, ['class' => 'span5', 'rows' => '3']) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">平台名称</label>
			<div class="controls">
				{{ Form::text('platform_name') }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">平台描述（短）</label>
			<div class="controls">
				{{ Form::text('playform_sort_desc') }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">平台描述</label>
			<div class="controls">
				{{ Form::textArea('playform_desc', null, ['class' => 'span5', 'rows' => '3']) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">平台URL</label>
			<div class="controls">
				{{ Form::text('playform_url') }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">广告位</label>
			<div class="controls">
				{{ Form::text('claim_image') }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">价格</label>
			<div class="controls">
				{{ Form::textArea('price_text', null, ['class' => 'span5', 'rows' => '3']) }}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">状态</label>
			<div class="controls">
				{{ Form::select('status', ['0' => '在售', '1' => '停售']) }}
			</div>
		</div>
		<div class="form-actions">
			{{ Form::submit('添加', ['class' => 'btn btn-primary save']) }}
		</div>
{{ Form::close() }}
@stop
