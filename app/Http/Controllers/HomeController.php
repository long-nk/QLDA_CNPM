<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Categories::all();
        $banners = Banner::all();
        $product_news = Product::where('Pro_hot', 1)->inRandomOrder()->limit(30)->get();
        $product_selling = Product::where('Pro_hot', 2)->inRandomOrder()->limit(30)->get();
        $products = Product::where('Pro_active', 1)->inRandomOrder()->limit(30)->get();
        $news = Article::where('A_Active', 1)->inRandomOrder()->limit(10)->get();

        return view('frontend.homepage.index', compact('categories', 'banners', 'product_news', 'product_selling', 'products', 'news'));
    }

    public function search(Request $request)
    {
        $keyWord = $request->search;
        $category = Categories::where('C_name', 'like', "%" . $keyWord . "%")->first();
        if($category != null){
            $products = Product::where('Pro_category_id', $category->id)->orWhere('Pro_name', 'like', "%" .$keyWord . "%")->paginate(24);
        } else {
            $products = Product::where('Pro_name', 'like', "%" .$keyWord . "%")->paginate(24);
        }


        return view('frontend.product.search', compact('products','category', 'keyWord'));
    }
}
