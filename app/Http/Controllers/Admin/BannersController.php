<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannersRequest;
use App\Models\Banner;
//use Illuminate\Support\Facades\File;
use Mockery\Exception;
use File;
use Image;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannerList = Banner::orderBy('sort')->get();

        return view('backend.banners.index', compact('bannerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannersRequest $request)
    {
        try {
            \DB::beginTransaction();

            $path = "images/banners";
            $image = $request->image;
            $file_path = "";
            if ($request->image) {
                $extension = $image->extension();
                $file_name = "daiphat_banners_" . time() .  '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
            }

            $data = [
                'name' => $request->name,
                'link' => $request->link,
                'image' => $file_path,
                'type' => $request->type,
                'sort' => $request->sort,
                'is_popup' => $request->is_popup,
                'status' => $request->status,
            ];
            Banner::create($data);
            \DB::commit();

            return redirect()->route('banners.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());

            return redirect()->back();
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
        $banner = Banner::find($id);
        return view('backend.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannersRequest $request, $id)
    {
        try {
            \DB::beginTransaction();

            $banner = Banner::find($id);
            if(!isset($banner)){
                throw new Exception("Not found!");
            }

            $path = "images/banners";
            $image = $request->image;
            if ($image && $banner->image != "") {
                File::delete($banner->image);
                $extension = $image->extension();
                $file_name = "daiphat_banners_" . time() . '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
                $banner->image = $file_path;
            }
            $banner->name = $request->name;
            $banner->link = $request->link;
            $banner->sort = $request->sort;
            $banner->type = $request->type;
            $banner->is_popup = $request->is_popup;
            $banner->status = $request->status;
            $banner->save();

            \DB::commit();
            return redirect()->route('banners.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
            return redirect()->back();
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
        $banner = Banner::find($id);

        if (empty($banner)) {
            return redirect()->back();
        }
        $banner->delete();
        return redirect()->back();
    }
}
