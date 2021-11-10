<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $categories = Categories::all();

        return view('backend.products.index', compact('products', 'categories'));
    }
}
