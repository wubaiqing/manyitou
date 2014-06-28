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
            done: function (e, data) {
                if (data.result) {
                    var id = $(this).attr('data-id');
                    $('input[name="' + id + '"]').val(data.result.data);
                } else {
                    alert('图片上传失败');
                }
            }
        });
    });
</script>
@stop

@section('content')
    <h3 class="box-header">添加BANNER</h3>
    {{ Form::open(array('url' => 'banner/create', 'method' => 'post', 'class' => 'form-horizontal')) }}

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
            <label class="control-label">填充色</label>
            <div class="controls">
                {{ Form::text('color', Input::old('color', $model->logo)) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">LOGO</label>
            <div class="controls">
                {{ Form::text('image', Input::old('image', $model->logo)) }}
                <span class="help-inline">
                    <span class="btn fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>上传</span>
                        <input class="upload-placeholder" type="file" name="file" data-id="image">
                    </span>
                </span>
            </div>
        </div>

        <div class="form-actions">
            {{ Form::submit('添加', ['class' => 'btn btn-primary save']) }}
        </div>
{{ Form::close() }}
@stop
