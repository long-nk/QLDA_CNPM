<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;

use App\Models\Banner;
use App\Models\Categories;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Support\Facades\DB;
use Image;
use Mockery\Exception;

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contents = Article::get();
        $categories = Categories::get();
        return view('backend.news.index', compact('contents', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.news.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            \DB::beginTransaction();

            $path = "images/uploads/news/";
            $image = $request->image;
            $file_path = "";
            if ($request->image) {
                $extension = $image->extension();
                $file_name = "nula_cosmetic_news_" . time() .  '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
            }

            $data = [
                'A_Name' => $request->title,
                'A_Avatar' => $file_path,
                'A_Description' => $request->summary,
                'A_Content' => $request->content_news,
                'A_Active' => $request->status,
            ];

            Article::create($data);
            \DB::commit();

            return redirect()->route('news.index');
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

        $content = Article::find($id);

        return view('backend.news.edit', compact('content'));

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
        $path = "images/uploads/news";
        $image = $request->image;
        try {
            \DB::beginTransaction();

            $news = Article::find($id);

            if ($image && $news->A_Avatar != "") {
                $extension = $image->extension();
                $file_name = "nula_cosmetic_news_" . time() . '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
                $news->A_Avatar = $file_path;
            }

            $news->A_Name = $request->title;
            $news->A_Description = $request->summary;
            $news->A_Content = $request->content_news;
            $news->A_Active = $request->status;
            $news->save();

            \DB::commit();
            return redirect()->route('news.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();

            return redirect()->route('dashboard');
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
        $new = Article::find($id);

        if (empty($new)) {
            return redirect()->back();
        }
        $new->delete();
        return redirect()->back();

    }

}

