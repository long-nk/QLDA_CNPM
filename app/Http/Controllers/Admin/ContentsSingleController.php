<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ContentsSingle;
use Illuminate\Http\Request;

class ContentsSingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = ContentsSingle::all();
        return view('backend.contents_single.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contents_single.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->get('title'),
            'contents' => $request->get('contents'),
            'status' => $request->get('status'),
        ];

        $validator = \Validator::make($data, [
            'title' => 'required|max:255',
            'contents' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                \DB::beginTransaction();

                $data['slug'] = str_slug($data['title'], '-');
                $content = ContentsSingle::create($data);

                \DB::commit();

                return redirect()->route('contents_single.index');
            } catch (Exception $e) {
                \Log::error($e->getMessage());
                \DB::rollback();
            }
        }
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
        $content = ContentsSingle::find($id);
        $categories = Category::all();
        return view('backend.contents_single.edit', compact('content', 'categories'));
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
        $data = [
            'title' => $request->get('title'),
            'contents' => $request->get('contents'),
            'status' => $request->get('status')
        ];

        $validator = \Validator::make($data, [
            'title' => 'required|max:255',
            'contents' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                \DB::beginTransaction();

                $news = ContentsSingle::where('id', $id)->first();

                $news->title = $data['title'];
                $news->slug = str_slug($data['title'], '-');
                $news->contents = $data['contents'];
                $news->status = $data['status'];
                $news->save();

                \DB::commit();
                return redirect()->route('contents_single.index');
            } catch (Exception $e) {
                \Log::error($e->getMessage());
                \DB::rollback();
            }
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
        $content = ContentsSingle::find($id);

        if (empty($content)) {
            return redirect()->back();
        }
        $content->delete();
        return redirect()->back();
    }
}
