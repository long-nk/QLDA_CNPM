<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Models\Categories;
use App\Models\Product;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Image;
use Mockery\CountValidator\Exact;

class ProductsController extends Controller
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

            $extension = $file->extension();
            $file_name = "my_pham_nula_" . rand(10000, mt_getrandmax()) . '_' . rand(10000, mt_getrandmax()) . '.' . $extension;
            $file->move('images/uploads/products/', $file_name);

            $imagePath = public_path('images/uploads/products/' . $file_name);

            //Create thumbs
            $thumbsPath = public_path('images/uploads/thumbs/' . $file_name);
            $image = Image::make($imagePath);
            $widthImg = $image->width();
            $heightImg = $image->height();
            $wResize = Product::WIDTH_THUMBS;
            $hResize = ($wResize * $heightImg) / $widthImg;
            $image->resize($wResize, $hResize)->save($thumbsPath);

            $data = [
                'Pro_name' => $request->name,
                'Pro_avatar' => $image,
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
    public function update(Request $request, $id)
    {
        if ($request->name == "") {
            $name = Product::setNameProduct($request->category);
        } else {
            $name = $request->name;
        }
        $data = [
            'name' => $name,
            'C_id' => $request->category,
            'slug' => str_slug($name, '-'),
            'status' => $request->status,
        ];
        $file = $request->image;
        $category = '';
        try {
            \DB::beginTransaction();

            $product = Product::with('fileItem')->whereId($id)->first();

            $category = $product->category->slug;

            if ($file) {
                //Remove old image
                if(isset($product->fileItem->path)){
                    $filePath = public_path('images/uploads/' . $product->fileItem->path . '/' . $product->fileItem->name);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }

                    //Remove old image
                    $thumbsPath = public_path('images/uploads/thumbs/' . $product->fileItem->name);
                    if (File::exists($thumbsPath)) {
                        File::delete($thumbsPath);
                    }
                }

                $extension = $file->extension();
                $file_name = "cong_nhom_duc_dai_phat_" . rand(10000, mt_getrandmax()) . '_' . rand(10000, mt_getrandmax()) . '.' . $extension;

                $fileItem = [
                    'name' => $file_name,
                    'mime' => $file->getClientMimeType(),
                    'size' => $file->getSize(),
                    'path' => 'products'
                ];

                $file->move('images/uploads/products/', $fileItem['name']);

                $imagePath = public_path('images/uploads/products/' . $file_name);
//

                //Create thumbs
                $thumbsPath = public_path('images/uploads/thumbs/' . $file_name);
                $image = Image::make($imagePath);
                $widthImg = $image->width();
                $heightImg = $image->height();
                $wResize = Product::WIDTH_THUMBS;
                $hResize = ($wResize * $heightImg) / $widthImg;
                $image->resize($wResize, $hResize)->save($thumbsPath);

                if(isset($product->fileItem->path)){
                    $file = FileItem::find($product->file_item_id);
                    $file->name = $fileItem['name'];
                    $file->mime = $fileItem['mime'];
                    $file->size = $fileItem['size'];
                    $file->path = $fileItem['path'];
                    $file->save();
                } else {
                    $fileCreate = FileItem::create($fileItem);
                    $product->name = $data['name'];
                    $product->file_item_id = $fileCreate->id;
                    $product->C_id = $data['C_id'];
                    $product->slug = $data['slug'];
                    $product->status = $data['status'];
                    $product->save();
                }
            }

            \DB::commit();
            return redirect()->route('products.list', ['slug' => $category]);
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
        try {
            \DB::beginTransaction();

            $product = Product::where('Id', $id)->first();
            $category = $product->category->slug;
            $product->fileItem()->delete();
            $product->delete();

            \DB::commit();
            return redirect()->route('products.list', ['slug' => $category]);
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();

            return redirect()->route('dashboard');
        }
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
