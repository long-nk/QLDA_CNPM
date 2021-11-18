<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.cart.index');
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

    public function addToCart(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->Pro_name,
                "quantity" => 1,
                "price" => $product->Pro_price,
                "image" => $product->Pro_avatar
            ];
        }
        $number = count($cart);

        session()->put('cart', $cart);

        return view('frontend.cart.cart_modal', compact('number'));
    }

    /**
     * Write code on Method
     *
//     * @return response()
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;

        if($id && $quantity){
            $cart = session()->get('cart');
            $cart[$id]["quantity"] = $quantity;
            session()->put('cart', $cart);
            return view('frontend.cart.cart_modal');
        }
    }

    public function updateNumber(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;

        if($id && $quantity){
            $cart = session()->get('cart');
            $cart[$id]["quantity"] = $quantity;
            session()->put('cart', $cart);
            return view('frontend.cart.index');
        }
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        $id = $request->id;
        if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return view('frontend.cart.cart_modal');
        }
    }

    public function removeProduct(Request $request)
    {
        $id = $request->id;
        if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return view('frontend.cart.cart_list');
        }
    }


}
