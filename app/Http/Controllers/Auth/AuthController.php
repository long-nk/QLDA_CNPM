<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
