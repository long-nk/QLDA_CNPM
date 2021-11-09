<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Thay đổi mật khẩu</title>
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
        <form class="login-form" method="POST" action="{{ route('password.update') }}">
            <h3 class="form-title font-green">{{ __('Reset Password') }}</h3>
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="password" placeholder="Enter New Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
        </form>

    </div>
    <div class="copyright"> <?php echo date('Y')?> © Nula Cosmetic. Admin Login. </div>
</div>


</body>
</html>
