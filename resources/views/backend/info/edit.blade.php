@extends('backend.layout.master')
@section('title', 'Quản lý người dùng | Dashboard')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left" style="width:100%;">
                    <h3 class="text-center">Cập nhật thông tin cửa hàng</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_content">
                        <form action="{{route('info.update', $pageInfo->id)}}" class="form-horizontal form-label-left"
                              validate autocomplete="off" enctype="multipart/form-data"
                              method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Tên cửa hàng
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   value="{{$pageInfo->name}}"
                                                   name="name" type="text">
                                            @if ($errors->has('name'))
                                                <div id="formMessage" class="alert alert-danger">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">Logo
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <div class="box_show_img">
                                                <img src="{{isset($pageInfo->fileItem->path)?asset('/') . $pageInfo->fileItem->path .'/'. $pageInfo->fileItem->name:''}}" alt="" id="img_show">
                                                <i class="">+</i>
                                            </div>
                                            <input type="file" class="hide_file" name="image"
                                                   onchange="show_img_selected(this)">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="slogan">Khẩu hiệu
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="slogan" class="form-control col-md-7 col-xs-12"
                                                   value="{{$pageInfo->slogan}}"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="slogan" required="required" type="text">
                                            @if ($errors->has('slogan'))
                                                <div id="formMessage" class="alert alert-danger">
                                                    <strong>{{ $errors->first('slogan') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="address_office">Địa chỉ
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="address_office" class="form-control col-md-7 col-xs-12"
                                                   value="{{$pageInfo->address_office}}"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="address_office" required="required" type="text">
                                            @if ($errors->has('address_office'))
                                                <div id="formMessage" class="alert alert-danger">
                                                    <strong>{{ $errors->first('address_office') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Số điện thoại
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="phone_number" class="form-control col-md-7 col-xs-12"
                                                   value="{{$pageInfo->phone_number}}"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="phone_number" required="required" type="text">
                                            @if ($errors->has('phone_number'))
                                                <div id="formMessage" class="alert alert-danger">
                                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="email">Email
                                        </label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input type="email" id="email" name="email"
                                                   value="{{$pageInfo->email}}"
                                                   class="form-control col-md-7 col-xs-12">
                                            @if ($errors->has('email'))
                                                <div id="formMessage" class="alert alert-danger">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="mst">Mã
                                            số thuế
                                        </label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input type="text" id="mst" name="mst"
                                                   value="{{$pageInfo->mst}}"
                                                   data-validate-minmax="10,100"
                                                   class="form-control col-md-7 col-xs-12">
                                            @if ($errors->has('mst'))
                                                <div id="formMessage" class="alert alert-danger">
                                                    <strong>{{ $errors->first('mst') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="manager">Người quản lý
                                        </label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input type="text" id="manager" name="manager"
                                                   value="{{$pageInfo->manager}}"
                                                   class="form-control col-md-7 col-xs-12">
                                            @if ($errors->has('manager'))
                                                <div id="formMessage" class="alert alert-danger">
                                                    <strong>{{ $errors->first('manager') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Cập nhật
                                </button>
                                <a href="{{URL::previous()}}" class="btn btn-default btn-secondary"><i
                                            class="fa fa-reply"></i> Quay lại</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /page content -->
@endsection

@push('js')
<script type="text/javascript">
    //Show image to box when select
    function show_img_selected(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img_show').attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    //Confirm delete
    function ConfirmDelete() {
        var x = confirm("Bạn có thực sự muốn xóa địa chỉ này?");
        if (x)
            return true;
        else
            return false;
    }
</script>
@endpush