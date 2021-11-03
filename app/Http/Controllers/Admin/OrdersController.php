<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller {

    public function __construct() {
        header('Content-Type: application/json');
    }

    public function index() {
        $data['arrOrders'] = DB::table('users')
                ->join('users_permission', 'users.pid_user', '=', 'users_permission.pid_user')
                ->where('users_permission.permission', '=', 'admin')
                ->get();
        return view('backend.orders')->with($data);
    }

    public function detailOrder() {
        $data[] = [];
        return view('backend.orders')->with($data);
    }

    public function show() {
        
    }

}
