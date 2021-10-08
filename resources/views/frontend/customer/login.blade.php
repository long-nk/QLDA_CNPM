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

                                                <li><strong><span>Đăng nhập tài khoản</span></strong></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <p class="title_page">Đăng nhập tài khoản</p>

                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="margin-bottom-20">
                        <div class="wrap_background_aside margin-bottom-40 page_login">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                                    <div class="page-login">
                                        <h1 class="title_heads a-center"><span>Đăng nhập</span></h1>
                                        <div id="login">
                                            <form accept-charset="utf-8" action="/account/login" id="customer_login"
                                                  method="post">
                                                <input name="FormType" type="hidden" value="customer_login">
                                                <input name="utf8" type="hidden" value="true">
                                                <div class="form-signup" style="color:red;">

                                                </div>
                                                <div class="form-signup clearfix">
                                                    <fieldset class="form-group">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input type="email"
                                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                               class="form-control form-control-lg" value=""
                                                               name="email" id="customer_email" placeholder="Email"
                                                               required="">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <label>Mật khẩu <span class="required">*</span></label>
                                                        <input type="password" class="form-control form-control-lg"
                                                               value="" name="password" id="customer_password"
                                                               placeholder="Mật khẩu" required="">
                                                    </fieldset>


                                                    <div class="pull-xs-left" style="margin-top:10px;">
                                                        <input class="btn btn-style btn_50" type="submit"
                                                               value="Đăng nhập">
                                                        <span class="block a-center quenmk">Quên mật khẩu</span>
                                                        <span class="block a-center dkm margin-top-40">Chưa có tài khoản, đăng ký <a
                                                                href="/account/register"
                                                                class="btn-link-style btn-register">tại đây</a></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="h_recover" style="display:none;">
                                            <div id="recover-password" class="form-signup page-login">
                                                <form accept-charset="utf-8" action="/account/recover"
                                                      id="recover_customer_password" method="post">
                                                    <input name="FormType" type="hidden"
                                                           value="recover_customer_password">
                                                    <input name="utf8" type="hidden" value="true">
                                                    <div class="form-signup" style="color: red;">

                                                    </div>
                                                    <div class="form-signup clearfix">
                                                        <fieldset class="form-group">
                                                            <label>Email <span class="required">*</span></label>
                                                            <input type="email"
                                                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                                   class="form-control form-control-lg" value=""
                                                                   name="Email" id="recover-email" placeholder="Email"
                                                                   required="">
                                                        </fieldset>
                                                    </div>
                                                    <div class="action_bottom">
                                                        <input class="btn btn-style btn_50" style="margin-top: 10px;"
                                                               type="submit" value="Lấy lại mật khẩu">

                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
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
                </section>


                <script type="text/javascript">
                    function showRecoverPasswordForm() {
                        document.getElementById('recover-password').style.display = 'block';
                        document.getElementById('login').style.display = 'none';
                    }

                    function hideRecoverPasswordForm() {
                        document.getElementById('recover-password').style.display = 'none';
                        document.getElementById('login').style.display = 'block';
                    }


                </script>
            </div>

@stop
