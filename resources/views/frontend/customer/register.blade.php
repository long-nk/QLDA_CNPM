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
                                            <h1 class="title_heads a-center"><span>Đăng ký</span></h1>
                                            <div id="login">
                                                <form accept-charset="utf-8" action="/account/register"
                                                      id="customer_register" method="post">
                                                    <input name="FormType" type="hidden" value="customer_register">
                                                    <input name="utf8" type="hidden" value="true"><input type="hidden"
                                                                                                         id="Token-29dc60d8cbad49c78295b976cc0aa33a"
                                                                                                         name="Token"
                                                                                                         value="03AGdBq24Q4zFfPfEigkw1zPYwcZYIU_outC6BjKibx62M5FQL4v13iggtju2UzV38sYNsASaXRMZnmuwJaznocQ6F5SGrtap1Wx1TX_izecKaDQmneLtURM5TfMfCHu-u2139bw2fnSFxWp77niz_DHkCHz2JFLyVcQnV364UJQbtkkLU77NL4ZcXEP9AZTW663beaOTHbDB0mo3Lpf_bdObTiBIFw9HdeP5RMFIerstUoY9InUG_8S94Jhn-7mbQ8P87jhOf5PcR_11Z26XuFRQ5QThMAVygSpjv8cPq7rruD-rIpjzO9JG9aUtAWiCaNVsUWbizQWB3yf3VRk8BMrHp8ERP97Kg8Wenxi5ctKsEogMoAAfEAPkMYvdjVFPZC6ApyGdeuXuazRkwHDNoAR-eZeUum4q8fA7Kr-3snKkz3pnw-naaScB5MV711gUeurj4s3ymQEtRmON9HHhVfzPnp4_yOtjpLQ">
                                                    <script
                                                        src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                                                    <script>
                                                        grecaptcha.ready(function () {
                                                            grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/account/register"})
                                                                .then(function (token) {
                                                                    document.getElementById("Token-29dc60d8cbad49c78295b976cc0aa33a").value = token
                                                                });
                                                        });
                                                    </script>
                                                    <div class="form-signup " style="color:red;">

                                                    </div>
                                                    <div class="form-signup clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <label> Họ<span class="required">*</span></label>
                                                                    <input type="text"
                                                                           class="form-control form-control-lg" value=""
                                                                           name="lastName" id="lastName"
                                                                           placeholder="Họ" required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <label>Tên <span class="required">*</span></label>
                                                                    <input type="text"
                                                                           class="form-control form-control-lg" value=""
                                                                           name="firstName" id="firstName"
                                                                           placeholder="Tên" required="">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <label>Email <span class="required">*</span></label>
                                                                    <input type="email"
                                                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                                           class="form-control form-control-lg" value=""
                                                                           name="email" id="email" placeholder="Email"
                                                                           required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <label>Số điện thoại <span class="required">*</span></label>
                                                                    <input placeholder="Số điện thoại" type="text"
                                                                           pattern="\d+"
                                                                           class="form-control form-control-comment form-control-lg"
                                                                           name="PhoneNumber" required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                                                                <fieldset class="form-group">
                                                                    <label>Mật khẩu <span class="required">*</span>
                                                                    </label>
                                                                    <input type="password"
                                                                           class="form-control form-control-lg" value=""
                                                                           name="password" id="password"
                                                                           placeholder="Mật khẩu" required="">
                                                                </fieldset>
                                                            </div>
                                                        </div>


                                                        <div class="section margin-top-10">
                                                            <button type="submit" value="Đăng ký"
                                                                    class="btn  btn-style btn_50">Đăng ký
                                                            </button>
                                                            <span class="block a-center dkm margin-top-40">Đã có tài khoản, đăng nhập <a
                                                                    href="/account/login"
                                                                    class="btn-link-style btn-register">tại đây</a></span>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="block social-login--facebooks">
                                                    <p class="a-center">
                                                        Hoặc đăng nhập bằng
                                                    </p>
                                                    <script>function loginFacebook() {
                                                            var a = {
                                                                    client_id: "947410958642584",
                                                                    redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                                                                    state: JSON.stringify({redirect_url: window.location.href}),
                                                                    scope: "email",
                                                                    response_type: "code"
                                                                },
                                                                b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0);
                                                            window.location.href = b
                                                        }

                                                        function loginGoogle() {
                                                            var a = {
                                                                    client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",
                                                                    redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                                                                    scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                                                                    access_type: "online",
                                                                    state: JSON.stringify({redirect_url: window.location.href}),
                                                                    response_type: "code"
                                                                },
                                                                b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0);
                                                            window.location.href = b
                                                        }

                                                        function encodeURIParams(a, b) {
                                                            var c = [];
                                                            for (var d in a) if (a.hasOwnProperty(d)) {
                                                                var e = a[d];
                                                                null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e))
                                                            }
                                                            return 0 == c.length ? "" : (b ? "?" : "") + c.join("&")
                                                        }</script>
                                                    <a href="javascript:void(0)" class="social-login--facebook"
                                                       onclick="loginFacebook()"><img width="129px" height="37px"
                                                                                      alt="facebook-login-button"
                                                                                      src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                                                    <a href="javascript:void(0)" class="social-login--google"
                                                       onclick="loginGoogle()"><img width="129px" height="37px"
                                                                                    alt="google-login-button"
                                                                                    src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
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
