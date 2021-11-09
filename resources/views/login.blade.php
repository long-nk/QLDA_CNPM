<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập hệ thống</title>
    <!--Bootstrap CSS-->
    <link href="{{asset('css/opensans.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/login/components.min.css')}}">

    <script type="text/javascript" src="{{asset('js/libs/jquery-2.2.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/libs/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/login.js')}}"></script>
</head>

<body>
<div class="login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <div class="profile_pic">
            <a href="{{url('/dashboard')}}">
                <img src="{{url('images/logo.jpg')}}" alt="Nula Cosmetic" width="70px" height="70px" class="img-circle profile_img">
            </a>
        </div>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="form-title font-green">Đăng nhập</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Tên tài khoản</label>
                <input id="email" type="email" class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror" type="text" autocomplete="off" placeholder="Tên tài khoản" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Mật khẩu</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Mật khẩu" name="password" /> </div>
            @if (session('status'))
                <div id="formMessage" class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            <div class="form-actions">
                <button type="submit" class="btn green uppercase">Đăng nhập</button>
                <label class="rememberme check mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" value="1" />Ghi nhớ
                    <span></span>
                </label>
                <a href="javascript:void(0)" id="forget-password" onclick="actionForm('forget_password')" class="forget-password">Quên mật khẩu?</a>
            </div>
            <div class="create-account">
                <p>
                    <!--<a  href="javascript:void(0)" id="register-btn" onclick="actionForm('register_btn')" class="uppercase">Create an account</a>-->
                    <a  href="javascript:void(0)" class="uppercase">Welcome to Login Admin</a>
                </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="{{ route('password.email') }}" method="post">
            {{csrf_field()}}
            <h3 class="font-green">Forget Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
            <div class="form-actions">
                <button type="button" id="back-btn" onclick="actionForm('back_btn')"  class="btn green btn-outline">Back</button>
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
    </div>
    <div class="copyright"> <?php echo date('Y')?> © Nula Cosmetic. Admin Login. </div>
</div>


</body>
</html>
