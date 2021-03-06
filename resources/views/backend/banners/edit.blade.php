@extends('backend.layout.master')

@section('title', 'Cập nhật banner ' . ' | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="col-md-12">
                    <h3 class="text-center">Cập nhật banner</h3>
                </div>
                <div class="col-md-12" style="padding: 0px;">
                    <a href="{{URL::previous()}}" class="btn btn-default"><i class="fa fa-reply"></i> Quay lại</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Banner</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left"
                                  action="{{route('banners.update', $banner->id)}}" enctype="multipart/form-data"
                                  autocomplete="off" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                        Tên banner
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" value="{{$banner->Sd_title}}"
                                               class="form-control col-md-7 col-xs-12"
                                               name="name" type="text" required placeholder="Tên banner">
                                        @if ($errors->has('name'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Hình ảnh
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="box_show_img image_logo img_full" style="width:100%!important;min-height: 130px;">
                                            <img src="{{url('/')}}/{{$banner->Sd_image}}" alt="" id="img_show" width="100%">
                                        </div>
                                        <div class="box_upload">
                                            <span class="fa fa-upload"></span> Chọn banner
                                            <input type="file" class="hide_file" name="image"
                                                   onchange="show_img_selected(this)" {{$banner->Sd_image == ""?"required":""}}>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link">
                                        Link
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="link" value="{{$banner->Sd_link}}"
                                               class="form-control col-md-7 col-xs-12" name="link" type="url"
                                               placeholder="http://www.urlwebsite.com">
                                        @if ($errors->has('link'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('link') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{--<div class="item form-group">--}}
                                    {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">{{trans('pdh.backend.banners.type')}}--}}
                                        {{--<span class="required">*</span>--}}
                                    {{--</label>--}}
                                    {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                                        {{--<select name="type" id="type" class="form-control" required>--}}
                                            {{--<option value="1" {{$banner->type == 1 ? "selected" : ""}}>{{trans('pdh.backend.banners.banner')}}</option>--}}
                                            {{--<option value="2" {{$banner->type == 2 ? "selected" : ""}}>{{trans('pdh.backend.banners.km')}}</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sort">
                                        Sắp xếp
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input id="sort" value="{{$banner->Sd_sort}}"
                                               class="form-control col-md-7 col-xs-12" name="sort" type="number" required>
                                        @if ($errors->has('sort'))
                                            <div id="formMessage" class="alert alert-danger">
                                                <strong>{{ $errors->first('sort') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{--<div class="item form-group">--}}
                                    {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="is_popup">Trạng thái hiển thị</label>--}}
                                    {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                                        {{--<select name="is_popup" id="is_popup" class="form-control" required>--}}
                                            {{--<option value="0" {{$banner->is_popup == 0 ? "selected" : ""}}>Không hiển thị</option>--}}
                                            {{--<option value="1" {{$banner->is_popup == 1 ? "selected" : ""}}>Hiển thị</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Trạng thái hiển thị
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="status" id="status" class="form-control"
                                                required>
                                            <option value="1" {{$banner->Sd_active == 1 ? "selected" : ""}}>Hiển thị</option>
                                            <option value="0" {{$banner->Sd_active == 0 ? "selected" : ""}}>Không hiển thị</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Cập nhật</button>
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
<script>
    //Show image to box when select
    function show_img_selected(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.image_logo #img_show').attr('src', e.target.result);
                $('.image_logo').attr('style', "min-height: auto");
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
