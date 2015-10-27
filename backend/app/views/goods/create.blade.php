@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('static/jQuery-File-Upload/css/jquery.fileupload-ui.css') }}" media="all" />

<script type="text/javascript" src="{{ asset('static/jQuery-File-Upload/js/vendor/jquery.ui.widget.js') }}"></script>
<script type="text/javascript" src="{{ asset('static/jQuery-File-Upload/js/jquery.iframe-transport.js') }}"></script>
<script type="text/javascript" src="{{ asset('static/jQuery-File-Upload/js/jquery.fileupload.js') }}"></script>
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

        UE.getEditor('playform_sort_desc');
        UE.getEditor('price_text');
        UE.getEditor('playform_desc');
        UE.getEditor('rules');

    });

    $('#Goods_picture').hover(function () {
        var src = $(this).val();
        if (src != '') {
            $('#picture-preview').position($(this).position());
            $('#picture-preview').attr('src', src).show();
        }
    }, function () {
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
            <label class="control-label">资源名称</label>
            <div class="controls">
                {{ Form::text('platform_name', Input::old('platform_name')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">网址</label>
            <div class="controls">
                {{ Form::text('playform_url', Input::old('playform_url')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">类型</label>
            <div class="controls">
                {{ Form::select('type', Goods::$typs, Input::old('type')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">适合推广平台</label>
            <div class="controls">
                {{ Form::select('generalize_platform', Goods::$generalizePlatforms, Input::old('generalize_platform')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">适合推广类目</label>
            <div class="controls">
                {{ Form::select('generalize_type', Goods::$generalizeTypes, Input::old('generalize_type')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">合作方式</label>
            <div class="controls">
                {{ Form::select('cooperation_type', Goods::$cooperationTypes, Input::old('cooperation_type')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">费用</label>
            <div class="controls">
                {{ Form::select('price_type', Goods::$priceTypes, Input::old('price_type')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">联系方式</label>
            <div class="controls">
                {{ Form::text('contact', Input::old('contact')) }}
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">排序</label>
            <div class="controls">
                {{ Form::text('order', Input::old('order')) }}
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
            <label class="control-label">推荐理由</label>
            <div class="controls">
                {{ Form::textArea('playform_desc', Input::old('playform_desc'), ['class' => 'span5', 'rows' => '3', 'id' => 'playform_desc', 'style' => 'height:220px; width:600px;']) }}
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
