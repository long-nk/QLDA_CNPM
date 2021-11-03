@extends('backend.layout.master')
@section('title', 'Quản lý thông tin cửa hàng | Dashboard')
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
                        <form action="{{route('address.update', $pageInfo->id)}}" class="form-horizontal form-label-left"
                              validate autocomplete="off"  method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="address_office">Địa chỉ
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="address" class="form-control col-md-7 col-xs-12"
                                                   value="{{$pageInfo->address}}"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="address" required="required" type="text">
                                            @if ($errors->has('address'))
                                                <div id="formMessage" class="alert alert-danger">
                                                    <strong>{{ $errors->first('address') }}</strong>
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
