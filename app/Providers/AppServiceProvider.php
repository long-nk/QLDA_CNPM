<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $minutes = 60;

            $categories = Cache::get('categories');
//            if (!Cache::has('categories')) {
            $categories = Categories::get();

            View::share('categories', $categories);
            Cache::put('categories', $categories, $minutes);
//            }

            $product_news = Cache::get('product_news');
//            if (!Cache::has('product_news')) {
            $product_news = Product::get();

            View::share('product_news', $product_news);
            Cache::put('product_news', $product_news, $minutes);
//            }

            $banners = Cache::get('banners');
//            if (!Cache::has('banners')) {
            $banners = Banner::orderBy('Sd_sort', 'asc')->get();

            View::share('banners', $banners);
            Cache::put('banners', $banners, $minutes);
//            }

            $singleProduct = Cache::get('singleProduct');
//            if (!Cache::has('singleProduct')) {
            $singleProduct = Product::first();

            View::share('singleProduct', $singleProduct);
            Cache::put('singleProduct', $singleProduct, $minutes);
//            }


            $view->with('singleProduct', $singleProduct);
            $view->with('banners', $banners);
            $view->with('categories', $categories);
            $view->with('product_news', $product_news);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
