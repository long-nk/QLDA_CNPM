<?php

namespace App\Http\Controllers\Admin;

use App\Models\Content;

use App\Models\FileItem;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Support\Facades\DB;
use Image;

class ServicesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contents = Content::select('contents.*', 'categories.name as cat_name')->with('fileItem')->leftJoin('categories', 'categories.id', '=', 'contents.C_id')->where('content_div', 2)->get();
        return view('backend.services.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.services.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $category = $request->category;
        if ($category == -1) {
            $content_div = 2;
        } else {
            $content_div = 0;
        }

        $data = [
            'C_id' => $request->category,
            'title' => $request->title,
            'slug' => str_slug($request->title, '-'),
            'summary' => $request->summary,
            'content' => $request->content_news,
            'content_div' => $content_div,
            'status' => $request->status,
        ];

        $file = $request->image;

        if (!$file) {
            return null;
        }

        $extension = $file->extension();
        $file_name = "cong_nhom_duc_dai_phat_" . rand(10000, mt_getrandmax()) . '_' . rand(10000, mt_getrandmax()) . '.' . $extension;
        $fileItem = [
            'name' => $file_name,
            'mime' => $file->getClientMimeType(),
            'size' => $file->getSize(),
            'path' => 'news'
        ];

        $validator = \Validator::make($data, [
            'title' => 'required|max:255',
            'summary' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            try {
                \DB::beginTransaction();

                $file->move('images/uploads/news/', $fileItem['name']);
                $imagePath = public_path('images/uploads/news/' . $fileItem['name']);

                $thumbsPath = public_path('images/uploads/thumbs/' . $file_name);
                $image = Image::make($imagePath);
                $widthImg = $image->width();
                $heightImg = $image->height();
                $wResize = Product::WIDTH_THUMBS;
                $hResize = ($wResize * $heightImg) / $widthImg;
                $image->resize($wResize, $hResize)->save($thumbsPath);


                $fileItem = FileItem::create($fileItem);
                $fileItem->content()->create($data);

                \DB::commit();
                return redirect()->route('services.index');
            } catch (Exception $e) {
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
        $content = Content::with('fileItem')->where('id', $id)->first();

        return view('backend.services.edit', compact('content'));
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
        $category = $request->category;
        if ($category == -1) {
            $content_div = 2;
        } else {
            $content_div = 0;
        }

        $data = [
            'C_id' => $request->category,
            'title' => $request->title,
            'slug' => str_slug($request->title, '-'),
            'summary' => $request->summary,
            'content' => $request->content_news,
            'content_div' => $content_div,
            'status' => $request->status,
        ];

        $file = $request->image;

        $validator = \Validator::make($data, [
            'title' => 'required|max:255',
            'summary' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();

        } else {
            try {
                error_reporting(E_ALL);
                ini_set('display_errors', 'On');
                \DB::beginTransaction();
                $news = Content::find($id);
                $news->title = $data['title'];
                $news->slug = $data['slug'];
                $news->C_id = $data['C_id'];
                $news->summary = $data['summary'];
                $news->content = $data['content'];
                $news->content_div = $data['content_div'];
                $news->status = $data['status'];
                $news->save();

                if ($file) {
                    $filePath = public_path('images/uploads/' . $news->fileItem->path . '/' . $news->fileItem->name);
                    if(File::exists($filePath)) {
                        File::delete($filePath);
                    }

                    $extension = $file->extension();
                    $file_name = "cong_nhom_duc_dai_phat_" . rand(10000, mt_getrandmax()) . '_' . rand(10000, mt_getrandmax()) . '.' . $extension;
                    $fileData = [
                        'name' => $file_name,
                        'mime' => $file->getClientMimeType(),
                        'size' => $file->getSize(),
                        'path' => 'news'
                    ];

                    $file->move('images/uploads/news/', $fileData['name']);

                    $imagePath = public_path('images/uploads/news/' . $file_name);
                    $thumbsPath = public_path('images/uploads/thumbs/' . $file_name);
                    $image = Image::make($imagePath);
                    $widthImg = $image->width();
                    $heightImg = $image->height();
                    $wResize = Product::WIDTH_THUMBS;
                    $hResize = ($wResize * $heightImg) / $widthImg;
                    $image->resize($wResize, $hResize)->save($thumbsPath);

                    $file = FileItem::find($news->file_item_id);
                    $file->name = $fileData['name'];
                    $file->mime = $fileData['mime'];
                    $file->size = $fileData['size'];
                    $file->path = $fileData['path'];
                    $file->save();
                }


                \DB::commit();

                return redirect()->route('services.index');

            } catch (Exception $e) {

                \Log::error($e->getMessage());

                \DB::rollback();
            }
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

        //

    }

}

