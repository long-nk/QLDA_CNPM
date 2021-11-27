<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transaction::join('order', 'transaction.id', '=', 'order.Od_transaction_id')
                ->join('product', 'product.id', '=', 'order.Od_product_id')
                ->get();
        return view('backend.checkouts.index', compact('data'));
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
        $data = Transaction::find($id);
        return view('backend.checkouts.edit', compact( 'data'));
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
        try {
            $trans = Transaction::find($id);
            if(!isset($trans)){
                throw new Exception("Not found!");
            }

            $trans->Tst_status = $request->status;
            $trans->save();

            \DB::commit();
            return redirect()->route('checkouts.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trans = Transaction::find($id);
        $order = Order::where('Od_transaction_id', '=', $id);

        if (empty($trans) || empty($order)) {
            return redirect()->back();
        }
        $trans->delete();
        $order->delete();
        return view('frontend.checkout.checkout_destroy');
    }
}
