<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\FileItem;
use App\Models\Product;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Image;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('fileItem', 'category')
            ->orderBy('category_id')->get();
//
//        foreach($products as $item){
//            $filePath = public_path('images/uploads/' . $item->fileItem->path . '/' . $item->fileItem->name);
//            $descPath = public_path('images/uploads/thumbs_new/' . $item->fileItem->name);
//
//            if(File::exists($filePath)) {
//                $thumbPath = public_path('images/uploads/thumbs/' . $item->fileItem->name);
//                File::copy($thumbPath, $descPath);
//            }
//        }
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->name == "") {
            $name = Product::setNameProduct($request->category);
        } else {
            $name = $request->name;
        }

        $data = [
            'name' => $name,
            'category_id' => $request->category,
            'slug' => str_slug($name, '-'),
            'status' => $request->status,
        ];
        $file = $request->image;

        if (!$file) {
            return null;
        }

        $extension = $file->extension();
        $file_name = "cong_nhom_duc_dai_phat_" . rand(10000, mt_getrandmax()) . '_' . rand(10000, mt_getrandmax()) . '.' . $extension;
        $fileItem = [
            'name' => $file_name,
            'mime' => $file->getClientMimeType(),
            'size' => $file->getSize(),
            'path' => 'products'
        ];

        $validator = \Validator::make($data, [
            'name' => 'required|max:255',
        ]);

        $category = '';
        if ($validator->fails()) {
            return redirect('admin/products/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                \DB::beginTransaction();

                $file->move('images/uploads/products/', $fileItem['name']);

                $imagePath = public_path('images/uploads/products/' . $file_name);
//                $filePath = $imagePath;
//                try {
//                    \Tinify\setKey(env("TINIFY_DEVELOPER_KEY"));
//                    $source = \Tinify\fromFile($filePath);
//                    $source->toFile($filePath);
//                } catch(\Tinify\AccountException $e) {
//                    // Verify your API key and account limit.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                } catch(\Tinify\ClientException $e) {
//                    // Check your source image and request options.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                } catch(\Tinify\ServerException $e) {
//                    // Temporary issue with the Tinify API.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                } catch(\Tinify\ConnectionException $e) {
//                    // A network connection error occurred.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                } catch(Exception $e) {
//                    // Something else went wrong, unrelated to the Tinify API.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                }

                //Create thumbs
                $thumbsPath = public_path('images/uploads/thumbs/' . $file_name);
                $image = Image::make($imagePath);
                $widthImg = $image->width();
                $heightImg = $image->height();
                $wResize = Product::WIDTH_THUMBS;
                $hResize = ($wResize * $heightImg) / $widthImg;
                $image->resize($wResize, $hResize)->save($thumbsPath);

                //Write text to image
//                $img = Image::make(public_path('images/uploads/products/'.$fileItem['name']));
//                $widthImg = $img->width();
//                $heightImg = $img->height();
//                $size_1 = 45;
//                $size_2 = 60;
//                if($widthImg < 800){
//                    $size_1 = 30;
//                    $size_2 = 40;
//                }
//                $img->text('nhomducdaiphat.com', $widthImg/2, $heightImg/2, function($font) use ($size_1) {
//                    $font->file(public_path('fonts/OpenSans-Bold.ttf'));
//                    $font->size($size_1);
//                    $font->color('#fff');
//                    $font->align('center');
//                    $font->valign('bottom');
//                });
//                $img->text('0948.65.66.88', $widthImg/2, $heightImg/2 + 50, function($font) use ($size_2)  {
//                    $font->file(public_path('fonts/OpenSans-Bold.ttf'));
//                    $font->size($size_2);
//                    $font->color('#ff0000');
//                    $font->align('center');
//                    $font->valign('bottom');
//                });
//                $img->save(public_path('images/uploads/products/'. $fileItem['name']));

                $fileItem = FileItem::create($fileItem);
                $fileItem->product()->create($data);

                $category = Category::find($request->category);

                \DB::commit();
                return redirect()->route('products.list', ['slug' => $category->slug]);
            } catch (Exception $e) {
                \Log::error($e->getMessage());
                \DB::rollback();
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
        $product = Product::where('id', $id)->with('fileItem')->first();

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
            'category_id' => $request->category,
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
//                $filePath = $imagePath;
//                try {
//                    \Tinify\setKey(env("TINIFY_DEVELOPER_KEY"));
//                    $source = \Tinify\fromFile($filePath);
//                    $source->toFile($filePath);
//                } catch(\Tinify\AccountException $e) {
//                    // Verify your API key and account limit.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                } catch(\Tinify\ClientException $e) {
//                    // Check your source image and request options.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                } catch(\Tinify\ServerException $e) {
//                    // Temporary issue with the Tinify API.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                } catch(\Tinify\ConnectionException $e) {
//                    // A network connection error occurred.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                } catch(Exception $e) {
//                    // Something else went wrong, unrelated to the Tinify API.
//                    return redirect('images/create')->with('error', $e->getMessage());
//                }

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
                    $product->category_id = $data['category_id'];
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

            $product = Product::where('id', $id)->first();
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

    public function list_all($category)
    {
        $products = Product::whereHas('category', function ($query) use ($category) {
                $query->where('categories.slug', $category);
            })
            ->with('fileItem')
            ->orderBy('created_at', 'desc')
            ->get();

        $category = Category::where('slug', 'like', $category)->first();

        if ($products) {
            return view('backend.products.products_category', compact('products', 'category'));
        } else {
            return redirect()->route('dashboard');
        }
    }

}
