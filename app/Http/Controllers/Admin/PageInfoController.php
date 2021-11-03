<?php

namespace App\Http\Controllers\Admin;

use App\Models\FileItem;
use App\Models\PageInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageInfo = PageInfo::with('address')->first();

        return view('backend.info.index', compact('pageInfo'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageInfo = PageInfo::where('id', $id)->first();
        return view('backend.info.edit', compact('pageInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'address_office' => 'required',
            'slogan' => 'required',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'name' => $request->name,
            'slogan' => $request->slogan,
            'address_office' => $request->address_office,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'mst' => $request->mst,
            'manager' => $request->manager,
        ];
        $file = $request->image;

        if ($file) {
            $extension = $file->extension();
            $file_name = "logo_" . rand(10000, mt_getrandmax()) . '_' . rand(10000, mt_getrandmax()) . '.' . $extension;
            $path = 'images/logo';
            $dataFileItem = [
                'name' => $file_name,
                'mime' => $file->getClientMimeType(),
                'size' => $file->getSize(),
                'path' => $path
            ];
            $file->move(public_path($path), $file_name);
            $fileItemId = FileItem::insertGetId($dataFileItem);
            $data['file_item_id'] = $fileItemId;
        }
        $result = PageInfo::where('id', $id)->update($data);

        if ($result) {
            return redirect()->route('info.index');
        } else {
            return redirect()->route('info.edit', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = PageInfo::where('id', $id)->delete();

        return redirect()->route('info.index');
    }
}
