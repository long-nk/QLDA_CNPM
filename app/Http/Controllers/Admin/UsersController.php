<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function __construct()
    {
        header('Content-Type: application/json');
    }

    public function index()
    {
        $data['list_users'] = User::get();

        $categories = Categories::get();

        return view('backend.users.index')->with($data, $categories);
    }

    public function profile(Request $request)
    {
        return view('backend.profile');
    }

    public function updateProfile(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|min:8',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        $result = User::where('id', Auth::user()->id)->update($data);
        if ($result) {
            return redirect()->route('users.getProfile');
        }
    }

    public function changeStatusUser($id)
    {
        $tmp = User::where('id', $id)->first();

        if ($tmp->status) {
            $result = User::where('id', $id)->update(['status' => 0]);
        } else {
            $result = User::where('id', $id)->update(['status' => 1]);
        }

        if ($result) {
            return redirect()->route('users.index');
        }
    }

    public function changePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $result = $user->save();

        if ($result) {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        $rules = [
            'name' => 'required|max:255',
            'password' => 'required|min:8',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                \DB::beginTransaction();
                $result = User::create($data);

                \DB::commit();
                return redirect()->route('users.index');
            } catch (\Exception $e) {
                \Log::error($e->getMessage());
                \DB::rollback();
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        return view('backend.users.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'password' => 'required|min:8',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'updated_at' => Carbon::now()
        ];
        $result = User::where('id', $id)->update($data);
        if ($result) {
            return redirect()->route('users.index');
        } else {
            return redirect()->route('users.show', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->delete();

        return redirect()->route('users.index');
    }

}
