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
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" action="{{route('categories.update', $category->id)}}"
                                  enctype="multipart/form-data" autocomplete="off" method="post">
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên chuyên mục
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" value="{{$category->name}}"
                                               class="form-control col-md-7 col-xs-12" name="name" type="text">
                                        @if ($errors->has('name'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{--<div class="item form-group">--}}
                                    {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Chuyên mục cha--}}
                                    {{--</label>--}}
                                    {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                                        {{--<select name="parent_id" id="" class="form-control">--}}
                                            {{--<option value="0" >-- None --</option>--}}
                                            {{--@foreach($categories as $item)--}}
                                                {{--<option value="{{$item->id}}" {{$item->id == $category->id?"selected":""}}>{{$item->name}}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mô tả
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="intro" id="editor1" cols="10" rows="3"
                                                  class="form-control">{{$category->intro}}</textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Trạng thái
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="status" id="status" value="{{$category->status}}"
                                                class="form-control">
                                            <option value="1" {{$category->status == 1?"selected":""}}>Hiển thị
                                            </option>
                                            <option value="0" {{$category->status == 0?"selected":""}}>Không hiển
                                                thị
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success" style="width: 100px;">Update</button>
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