<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRestorePasswordRequest;
use App\Http\Requests\UserSendLinkRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\SendLinkVerify;

class CustomerController extends Controller
{
    // login
    public function login(){
        return view('frontend.customer.login');
    }

    public function handleLogin(UserLoginRequest $request){
        try {
            $captcha = $request->input('g-recaptcha-response');
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode(env("RECAPTCHA_SECRET_KEY")) . '&response=' . urlencode($captcha);
            $response = file_get_contents($url);
            $responseKeys = json_decode($response,true);
            $result = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true);
            if ($result && $responseKeys["success"]) {
                $user = User::where('email',$request->input('email'))->first();
                // login the user
                Auth::login($user, true);
                return redirect()->route('home');
            } else {
                $validator = \Validator::make([], []);
                $validator->errors()->add('email', 'Bạn đã nhập sai Email hoặc Password');

                return redirect()->back()->withErrors($validator)->withInput();
            }
        } catch (\Throwable $e) {
            \Log::info($e->getMessage());
        }
    }

    public function register(){
        return view('frontend.customer.register');
    }

    public function handleRegister(UserRegisterRequest $request){
        $data = $request->all();
        User::create([
            'name'       => $data['name'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['password']),
            'phone'      => $data['phone']
        ]);
        return redirect()->route('customer.login')->withInput()->with('success','Đăng ký thành công');
    }

    /**
     * Logout
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('customer.login')->with('success','Đăng xuất thành công');
    }

    public function forgotPassword()
    {
        return view('frontend.customer.forgot-password');
    }

    public function sendLink(UserSendLinkRequest $request)
    {
        $user = User::whereEmail($request->input('email'))->first();
        if (!is_null($user)) {
            $token = Str::random(30);
            PasswordReset::create([
                'email'    => $request->input('email'),
                'token'    => $token
            ]);
            Mail::to($request->input('email'))->send(new SendLinkVerify($token));
            return redirect()->back()->with('success','Gửi link thành công, vui lòng kiểm tra hộp thư của bạn.');
        } else {
            return redirect()->back()->with('invalid','Email này không tồn tại trong hệ thống.');
        }
    }

    public function showChangePassword($token)
    {
        $user = PasswordReset::where('token', '=', $token)->first();
        return view('frontend.customer.restore-password',['email' => $user['email']]);
    }

    public function restorePassword(UserRestorePasswordRequest $request)
    {
        if($request->input('password') === $request->input('repassword')){
            User::whereEmail($request->input('email'))->update(['password' => bcrypt($request->input('password'))]);
            if(Auth::check()){
                Auth::logout();
            }
            return redirect()->route('customer.login')->with('success','Đổi mật khẩu thành công.');;
        }else{
            return redirect()->back()->with('invalid','Mật khâu không trùng khớp.');
        }
    }
}