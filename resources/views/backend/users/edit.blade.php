@extends('backend.layout.master')
@section('title', 'Cập nhật thông tin người dùng | Dashboard')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Cập nhật thông tin người dùng</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form action="{{route('users.update', $user->id)}}" class="form-horizontal form-label-left"
                                  id="frmAddUser" validate autocomplete="off"
                                  method="post">
                                <input type="hidden" name="_method" value="PUT">
                                {{csrf_field()}}
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Tên đăng
                                                nhập
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12"
                                                       value="{{$user->name}}"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="name" required="required" type="text">
                                                @if ($errors->has('name'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="email">Email
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email"
                                                       value="{{$user->email}}"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if ($errors->has('email'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="number">Số
                                                điện thoại
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input type="text" id="phone" name="phone"
                                                       value="{{$user->phone}}"
                                                       data-validate-minmax="10,100"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if ($errors->has('phone'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="password">Mật
                                                khẩu
                                            </label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <input id="password" class="form-control col-md-7 col-xs-12"
                                                       data-validate-length-range="6" data-validate-words="2"
                                                       name="password" type="password">
                                                @if ($errors->has('password'))
                                                    <div id="formMessage" class="alert alert-danger">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-refresh"></i> Cập nhật
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
    </div>
    <!-- /page content -->
@endsection

@push('js')
    <script type="text/javascript" src="{{asset('backend/js/users.js')}}"></script>
@endpush
