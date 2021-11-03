<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{

    public function __construct()
    {
        header('Content-Type: application/json');
    }
    public function index() {
        $data[] = [];
        $data['arrCustomers'] = DB::table('users')
//                ->join('users','customer.user_id','=','users.id')
                ->join('users_permission','users_permission.pid_user','=','users.pid_user')
                ->where('users_permission.pid_user','=','3')
                ->get();
        return view('backend.customers')->with($data);
    }
    public function show(){
        
    }
    public function detailCustomer($id){
        $data['arrCustomers'] = DB::table('customer')
                ->join('users','customer.user_id','=','users.id')
                ->join('users_permission','users_permission.pid_user','=','users.id')
                ->where('users_permission.permission','=','customer')
                ->where('customer.id','=',$id)
                ->get();
        return view('backend.product_detail')->with($data);
    }
    public function changeStatusCustomer($id)
    {

        $tmp = DB::table('users')->where('id', $id)->get()->toArray();


        if ($tmp[0]->status)
        {
            $result = DB::table('users')->where('id', $id)->update(['status' => 0]);
            $stt['code'] = 0;
        }
        else
        {
            $result = DB::table('users')->where('id', $id)->update(['status' => 1]);
            $stt['code'] = 1;
        }

        if ($result)
        {
            $stt['status'] = 'success';
        }
        else
        {
            $stt['status'] = 'fail';
        }
        return json_encode($stt);
    }

    public function deleteCustomers($id)
    {
        if (is_array($id))
        {
            foreach ($id as $key => $value)
            {
                $result = DB::table('users')->where('id', '=', $value[$key])->delete();
            }
        }
        else
        {
            $result = DB::table('users')->where('id', '=', $id)->delete();
        }

        if ($result)
        {
            $stt['status'] = 'success';
        }
        else
        {
            $stt['status'] = 'fail';
        }
        return json_encode($stt);
    }

}
