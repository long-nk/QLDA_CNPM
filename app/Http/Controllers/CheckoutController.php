<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Order;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Rules\PhoneNumber;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.checkout.index');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $trans = Transaction::create([
                'Tst_user_id' => $request->user_id,
                'Tst_email' => $request->email,
                'Tst_name' => $request->fullname,
                'Tst_address' => $request->address_ship,
                'Tst_phone' => $request->phone,
                'Tst_note' => $request->note,
                'Tst_payment' => $request->payment_type,
                'Tst_total_money' => $request->total_money
            ]);

            // Insert into order_product table
            foreach (session('cart') as $id => $item) {
                $order = Order::create([
                    'Od_transaction_id' => $trans->id,
                    'Od_Product_id' => $id,
                    'Od_qty' => $item['quantity'],
                    'Od_Sale' => $item['price']
                ]);
            }

            $cart = Order::join('product', 'product.id', '=', 'order.Od_product_id')
                ->where('order.Od_transaction_id', '=', $order->Od_transaction_id)
                ->get();

            session()->forget('cart');

            return view('frontend.checkout.checkout_success', compact('trans', 'cart'));

        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->id) {
            $trans = Transaction::where('id', '=', $request->id)->first();

            $trans->Tst_status = 3;
            $trans->Tst_reason = $request->reason;
            $trans->save();
            return view('frontend.checkout.checkout_destroy');
        }

    }
}
