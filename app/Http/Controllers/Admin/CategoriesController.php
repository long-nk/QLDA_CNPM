<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::where('C_active', '=', 1)->orderBy('id')->get();
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::get();
        return view('backend.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = count(Categories::get());
        if($request->type <= $count){
            return new \Exception('Category type must be greater than ' . $count);
        } else{
            $name = $request->name;
            $data = [
                'C_name' => $name,
                'C_type' => $request->type,
                'C_active' => $request->status
            ];

            $validator = \Validator::make($data, [
                'C_name' => 'required|max:255',
            ]);

            if ($validator->fails()) {
                return redirect('admin/categories/create')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                Categories::create($data);

                $categories = Categories::get();
                Cache::put('categories', $categories, 60);

                return redirect()->route('categories.index');
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
        $category = Categories::where('id', $id)->first();

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
            'C_name' => $name,
            'C_type' => $request->type,
            'C_active' => $request->status
        ];

        $validator = \Validator::make($data, [
            'C_name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $category = Categories::where('id', $id)->first();
            $category->C_name = $data['C_name'];
            $category->C_type = $data['C_type'];
            $category->C_active = $data['C_active'];
            $category->save();

            $categories = Categories::get();
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
        Categories::find($id)->delete();

        $categories = Categories::get();
        Cache::put('categories', $categories, 60);

        return redirect()->route('categories.index');
    }


}
