<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Models\Categories;
use App\Models\Product;
use File;
use Image;
use Mockery\Exception;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Categories::get();
        $products = Product::get();
        return view('backend.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::get();
        return view('backend.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        $file = $request->image;
        if (!$file) {
            return new \Exception('Image is required!');
        }

        try {
            \DB::beginTransaction();

            $path = "images/uploads/products";
            $image = $request->image;
            $file_path = "";
            if ($request->image) {
                $extension = $image->extension();
                $file_name = "nula_cosmetic_product_" . time() .  '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
            }

            $data = [
                'Pro_name' => $request->name,
                'Pro_avatar' => $file_path,
                'Pro_category_id' => $request->category,
                'Pro_active' => $request->status,
                'Pro_price' => $request->price,
                'Pro_sale' => $request->sale,
                'Pro_description' => $request->description,
                'Pro_hot' => $request->rank
            ];

            Product::create($data);

            \DB::commit();
            return redirect()->route('products.list', ['id' => $request->category]);
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
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
        $product = Product::where('id', $id)->first();

        return view('backend.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        if ($request->name == "") {
            $name = Product::setNameProduct($request->category);
        } else {
            $name = $request->name;
        }
        $path = "images/uploads/products";
        $image = $request->image;
        $category = '';
        try {
            \DB::beginTransaction();

            $product = Product::find($id);

            $category = $product->category->id;
            if ($image && $product->Pro_avatar != "") {
                $extension = $image->extension();
                $file_name = "nula_cosmetic_product_" . time() . '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
                $product->Pro_avatar = $file_path;
            }

            $product->Pro_name = $request->name;
            $product->Pro_category_id = $request->category;
            $product->Pro_active = $request->status;
            $product->Pro_price = $request->price;
            $product->Pro_sale = $request->sale;
            $product->Pro_description = $request->description;
            $product->Pro_hot = $request->rank;

            $product->save();

            \DB::commit();
            return redirect()->route('products.list', ['id' => $category]);
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
        $product = Product::find($id);

        if (empty($product)) {
            return redirect()->back();
        }
        $product->delete();
        return redirect()->back();
    }

    public function list_all($id)
    {
        $products = Product::whereHas('category', function ($query) use ($id) {
            $query->where('categories.id', $id);
        })
            ->orderBy('created_at', 'desc')
            ->get();

        $category = Categories::where('id', $id)->first();

        if ($products) {
            return view('backend.products.products_category', compact('products', 'category'));
        } else {
            return redirect()->route('dashboard');
        }
    }

}
