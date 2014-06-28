@section('styles')
<link rel="stylesheet" type="text/css" href="http://admin.meipin.com/scripts/jQuery-File-Upload/css/jquery.fileupload-ui.css" media="all" />
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="http://admin.meipin.com/scripts/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        UE.getEditor('content');
    });
</script>
@stop

@section('content')

    {{ Form::open(array('url' => 'billboard/create', 'method' => 'post', 'class' => 'form-horizontal')) }}

        <h3 class="box-header">添加公告</h3>

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
            <label class="control-label">公告标题</label>
            <div class="controls">
                {{ Form::text('title', Input::old('title')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">公告内容</label>
            <div class="controls">
                {{ Form::textArea('content', Input::old('content'), ['class' => 'span5', 'rows' => '4', 'id' => 'content', 'style' => 'height:400px; width:500px;']) }}
            </div>
        </div>

        {{ Form::hidden('status', 1)  }}

        <div class="form-actions">
            {{ Form::submit('添加', ['class' => 'btn btn-primary save']) }}
        </div>

    {{ Form::close() }}
@stop
