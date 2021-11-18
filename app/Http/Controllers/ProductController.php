<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('Pro_Active', 1)->orderBy('created_at', 'desc')->paginate(24);

        $category = Categories::all();

        return view('frontend.product.index', compact('products', 'category'));
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
    public function show($product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $category = Categories::where('id', $product->Pro_category_id)->first();
        $products = Product::where('Pro_category_id', $product->Pro_category_id)->inRandomOrder()->limit(18)->get();;
        return view('frontend.product.product_detail', compact('product', 'category', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function category($category_id)
    {
        $products = Product::where('Pro_category_id', $category_id)->orderBy('created_at', 'desc')->paginate(24);

        $category = Categories::where('id', $category_id)->first();

        return view('frontend.product.category', compact('products', 'category'));
    }

}
