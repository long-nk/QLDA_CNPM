<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\FileItem;
use Faker\Provider\File;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('backend.categories.index', compact('categories'));
    }

    public function sitemap()
    {
        $categories = Category::get();

        return view('backend.categories.sitemap', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $categories = Category::where('status', Category::ACTIVE)->get();
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;

        $data = [
            'name' => $name,
//            'parent_id' => $request->parent_id,
            'intro' => $request->intro,
            'slug' => str_slug($name, '-'),
            'status' => $request->status
        ];

        $validator = \Validator::make($data, [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('admin/categories/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            Category::create($data);

            $categories = Category::get();
            Cache::put('categories', $categories, 60);

            return redirect()->route('categories.index');
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
        $category = Category::where('id', $id)->first();

        return view('backend.categories.edit', compact('category'));
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
        $name = $request->name;

        $data = [
            'name' => $name,
//            'parent_id' => $request->parent_id,
            'intro' => $request->intro,
            'slug' => str_slug($name, '-'),
            'status' => $request->status
        ];

        $validator = \Validator::make($data, [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $category = Category::where('id', $id)->first();
            $category->name = $data['name'];
//            $category->parent_id = $data['parent_id'];
            $category->intro = $data['intro'];
            $category->slug = $data['slug'];
            $category->status = $data['status'];
            $category->save();

            $categories = Category::get();
            Cache::put('categories', $categories, 60);

            return redirect()->route('categories.index');
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
        $category = Category::find($id)->delete();

        $categories = Category::get();
        Cache::put('categories', $categories, 60);

        return redirect()->route('categories.index');
    }


}
