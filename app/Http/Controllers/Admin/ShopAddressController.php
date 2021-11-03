<?php

namespace App\Http\Controllers\Admin;

use App\Models\FileItem;
use App\Models\PageInfo;
use App\Models\ShopAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'page_info_id' => $request->page_info_id,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ];

        $shopAddress = ShopAddress::create($data);

        return redirect()->route('info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageInfo = ShopAddress::where('id', $id)->first();
        return view('backend.address.edit', compact('pageInfo'));
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
            'phone_number' => 'required',
            'address' => 'required',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ];

        $result = ShopAddress::where('id', $id)->update($data);

        if ($result) {
            return redirect()->route('info.index');
        } else {
            return redirect()->route('info.edit', $id);
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
        $record = ShopAddress::where('id', $id)->delete();

        return redirect()->route('info.index');
    }
}
