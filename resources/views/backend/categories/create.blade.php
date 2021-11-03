@extends('backend.layout.master')
@section('title', 'Chuyên mục | Dashboard')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Thông tin chuyên mục</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Chuyên mục</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{route('categories.store')}}"
                                  enctype="multipart/form-data" autocomplete="off" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên chuyên mục
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" value="{{old('name')}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="name" type="text">
                                        @if ($errors->has('name'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{--<div class="item form-group">--}}
                                    {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Chuyên mục cha--}}
                                        {{--<span class="required">*</span>--}}
                                    {{--</label>--}}
                                    {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                                        {{--<select name="parent_id" id="" class="form-control" {{old('parent_id')}}>--}}
                                            {{--<option value="0" selected>-- None --</option>--}}
                                            {{--@foreach($categories as $item)--}}
                                                {{--<option value="{{$item->id}}">{{$item->name}}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mô tả <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="intro" id="editor1" cols="10" rows="3"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                {{--<div class="item form-group">--}}
                                    {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Có bài viết?--}}
                                    {{--</label>--}}
                                    {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                                        {{--<select name="is_contents" id="is_contents" value="{{old('is_contents')}}"--}}
                                                {{--class="form-control">--}}
                                            {{--<option value="0">Không</option>--}}
                                            {{--<option value="1">Có</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Trạng thái
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="status" id="status" value="{{old('status')}}"
                                                class="form-control">
                                            <option value="1">Hiển thị</option>
                                            <option value="0">Không hiển thị</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Thêm
                                            mới
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@push('js')
<script src="{{asset('libs/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{url("/upload.php")}}",
    });
</script>
@endpush