<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

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
                $validator->errors()->add('email', 'Email/Mật khẩu không đúng');

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
            'First_Name' => $data['firstName'],
            'Last_Name'  => $data['lastName'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['password']),
            'Phone'      => $data['phoneNumber']
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
}
