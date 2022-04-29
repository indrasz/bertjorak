<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Transaction;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            // Admin Transaction
            if (Auth::user()->hasRole('admin')) {
                $orderData = Order::join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('users', 'orders.id_buyer', '=', 'users.id')->get();

                return view('pages.dashboard.transaction.index')->with('orderData', $orderData);
            }
            // Buyer Transaction
            elseif (Auth::user()->hasRole('buyer')) {
                $authId = Auth::user()->id;
                // Get Order Data
                $orderData = Order::where('id_buyer', $authId)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->get();

                // foreach ($orderData as $getIdOrder) {
                //     $getIdO = $getIdOrder->id_order;
                // }
                // dd($getIdOrder);
                // Get Cart Data
                // $cartData = Cart::where('carts.id_order', $getIdO)->join('orders', 'carts.id_order', '=', 'orders.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->get();

                return view('pages.store.dashboard-user.transaction.index')->with('orderData', $orderData);
            }
        } else {
            return view('errors.404');
        }
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
        // $al = $request->pilihKurir;
        // dd($al);
        $authId = Auth::user()->id;

        $id_cart = $request->idCart;

        $transaction = new Transaction();

        $transaction->status = "Pending";
        $transaction->id_kurir = $request->pilihKurir;
        $transaction->id_jenisKurir = $request->pilihJenisKurir;
        $transaction->totalCost = $request->totalPrice;
        $transaction->date_transaction = Carbon::now();

        if ($transaction->save()) {

            $order = new Order();

            $time = time();
            $date = date('d', $time);
            $order->kode_order = "BRJ - " . $date . rand() . $authId;
            $order->id_buyer = $authId;
            // foreach ($id_cart as $key => $value) {
            //     $getIdCart[] = $value;
            //     $order->id_cart = json_encode($getIdCart);
            // }
            $order->id_transaction = $transaction->id_transaction;
            $order->date_order = Carbon::now();

            if ($order->save()) {
                foreach ($id_cart as $key => $value) {
                    $cartUpdate = Cart::where('id_cart', $value)->update([
                        'id_order' => $order->id,
                        'status' => 'Sukses',
                    ]);
                }
            }
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.store.dashboard-user.transaction.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $cartList = Cart::all();

        $cart = $cartList->where('id_order', $id);

        $as = $cart->join('products', 'carts.id_product', '=', 'products.id_product');

        //dd($as->id_order);
        // $orderData = Order::where('id_order', $id)->get();

        // foreach ($orderData as $key => $value) {
        //     $getId = json_decode($value->id_cart);
        //     //dd($getId);

        //     $orderCart = Order::join('carts', 'orders.id_cart', '=', 'carts.id_cart')->get();
        //     dd($orderCart);
        //     ////dd($orderCart);
        // }

        //dd($orderData);

        //dd($orderData);

        // foreach ($orderData as $key => $value) {
        //     foreach (json_decode($value->id_cart, true) as $getCart) {
        //         dd($);
        //         //echo $getCart;
        //     }
        // }
        return view('pages.dashboard.transaction.edit');

        // return view('pages.dashboard.transaction.edit')->with('orderData', $orderData)->with('getId', $getId)->with('order');
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
}
