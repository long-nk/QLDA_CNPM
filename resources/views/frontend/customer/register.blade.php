@extends('frontend.template.layout')

@section('content')

    <div class="col-lg-10 col-lg-fix10">
        <div class="block_right">
            <div class="wrapmain wrap_body_calc">
                <div class="section breadcrumb_background margin-bottom-30 margin-left-15 margin-top-10">
                    <div class="title_full">
                        <div class="a-left">
                            <section class="bread-crumb">
                                <span class="crumb-border"></span>
                                <div class="container3">
                                    <div class="row">
                                        <div class="col-xs-12 a-center">
                                            <ul class="breadcrumb">
                                                <li class="home">
                                                    <a href="/"><span>Trang chủ</span></a>
                                                    <span class="mr_lr">&nbsp;/&nbsp;</span>
                                                </li>

                                                <li><strong><span>Đăng ký tài khoản</span></strong></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <p class="title_page">Đăng ký tài khoản</p>

                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="margin-bottom-20">
                        <div class="wrap_background_aside margin-bottom-40 page_login">
                            <div class="wrap_background_aside margin-bottom-40">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                                        <div class="page-login">
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </div>
                                            @endif
                                            <h1 class="title_heads a-center"><span>Đăng ký</span></h1>
                                            <div id="login">
                                                <form accept-charset="utf-8" action="{{ route('customer.handle.register') }}"
                                                      id="customer_register" method="post">

                                                    @csrf

                                                    <div class="form-signup clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <label> Họ<span class="required">*</span></label>
                                                                    <input type="text"
                                                                           class="form-control form-control-lg" value="{{ old('lastName') }}"
                                                                           name="lastName" id="lastName"
                                                                           placeholder="Họ">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <label>Tên <span class="required">*</span></label>
                                                                    <input type="text"
                                                                           class="form-control form-control-lg" value="{{ old('firstName') }}"
                                                                           name="firstName" id="firstName"
                                                                           placeholder="Tên">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <label>Email <span class="required">*</span></label>
                                                                    <input type="email"
                                                                           class="form-control form-control-lg" value="{{ old('email') }}"
                                                                           name="email" id="email" placeholder="Email"
                                                                           >
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <label>Số điện thoại <span class="required">*</span></label>
                                                                    <input placeholder="Số điện thoại" type="tel"
                                                                           value="{{ old('phoneNumber') }}"
                                                                           class="form-control form-control-comment form-control-lg"
                                                                           pattern="[0-9]{10}"
                                                                           name="phoneNumber">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                                                                <fieldset class="form-group">
                                                                    <label>Mật khẩu <span class="required">*</span>
                                                                    </label>
                                                                    <input type="password"
                                                                           class="form-control form-control-lg"
                                                                           name="password" id="password"
                                                                           placeholder="Mật khẩu">
                                                                </fieldset>
                                                            </div>
                                                        </div>


                                                        <div class="section margin-top-10">
                                                            <button type="submit" value="Đăng ký"
                                                                    class="btn  btn-style btn_50">Đăng ký
                                                            </button>
                                                            <span class="block a-center dkm margin-top-40">Đã có tài khoản, đăng nhập <a
                                                                    href="{{ route('customer.login') }}"
                                                                    class="btn-link-style btn-register">tại đây</a></span>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="block social-login--facebooks">
                                                    <p class="a-center">
                                                        Hoặc đăng nhập bằng
                                                        @include('frontend.includes.social_login')
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



@stop
