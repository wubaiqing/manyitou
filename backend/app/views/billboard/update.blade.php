@section('styles')
    <script type="text/javascript">
        $(document).ready(function () {
            UE.getEditor('content');
        });
    </script>
@stop

@section('content')

    {{ Form::open(array('url' => 'billboard/update/' . $model->id, 'method' => 'post', 'class' => 'form-horizontal')) }}

    <h3 class="box-header">修改公告</h3>

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
            {{ Form::text('title', Input::old('title', $model->title, $model->title)) }}
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">公告内容</label>
        <div class="controls">
            {{ Form::textArea(
                'content',
                Input::old('content', $model->content),
                [
                    'class' => 'span5',
                    'rows' => '4',
                    'id' => 'content',
                    'style' => 'height:400px; width:500px;'
            ]) }}
        </div>
    </div>

    {{ Form::hidden('status', 1)  }}

    <div class="form-actions">
        {{ Form::submit('修改', ['class' => 'btn btn-primary save']) }}
    </div>

    {{ Form::close() }}
@stop
