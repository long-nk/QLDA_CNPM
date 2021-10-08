<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // login
    public function login(){
        return view('frontend.customer.login');
    }

    public function register(){
        return view('frontend.customer.register');
    }
}
