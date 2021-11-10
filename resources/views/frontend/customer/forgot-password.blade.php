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

                                                <li><strong><span>Quên mật khẩu</span></strong></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <p class="title_page">Quên mật khẩu</p>

                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="margin-bottom-20">
                        <div class="wrap_background_aside margin-bottom-40 page_login">
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
                                        @if(Session::has('invalid'))
                                            <div class="alert alert-danger alert-dismissible">
                                                <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{Session::get('invalid')}}
                                            </div>
                                        @endif
                                        @if(Session::has('success'))
                                            <div class="alert alert-success alert-dismissible">
                                                <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                {{Session::get('success')}}
                                            </div>
                                        @endif
                                        <h1 class="title_heads a-center"><span>Quên mật khẩu</span></h1>
                                        <div id="login">
                                            <form accept-charset="utf-8" action="{{ route('customer.send.mail') }}"
                                                  method="post">

                                                @csrf

                                                <div class="form-signup clearfix">
                                                    <fieldset class="form-group">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="email"
                                                               class="form-control form-control-lg" value="{{ old('email') }}"
                                                               name="email" id="customer_email" placeholder="Email"
                                                               >
                                                    </fieldset>

                                                    <div class="pull-xs-left" style="margin-top:10px;">
                                                        <input class="btn btn-style btn_50" type="submit"
                                                               value="Gửi">
                                                        <span class="block a-center dkm margin-top-40">Chưa có tài khoản, đăng ký <a
                                                                href="{{ route('customer.register') }}"
                                                                class="btn-link-style btn-register">tại đây</a></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
                </section>
            </div>
@stop
