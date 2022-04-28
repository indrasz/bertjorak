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
        $authId = Auth::user()->id;
        $orderData = Order::where('id_buyer', $authId)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->get();

        // foreach ($orderData as $key => $value) {
        //     $totalCart = json_decode($value['id_cart']);
        // }
        //dd($orderData);
        // //join('users', 'carts.id_user', '=', 'users.id')
        // $as = Order::all();
        // foreach ($as as $key => $value) {
        //     $ka = $value->join('transactions', 'orders.id', '=', 'transactions.id_order')->get();
        //     dd($ka);
        // }

        return view('pages.dashboard.transaction.index')->with('orderData', $orderData);
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
        // dd($request->pilihKurir);
        $authId = Auth::user()->id;

        $id_cart = $request->idCart;

        $transaction = new Transaction();

        $transaction->status = "Pending";
        $transaction->date_transaction = Carbon::now();

        if ($transaction->save()) {

            $order = new Order();

            $order->id_order = "BRJ - " . time() . $authId;
            $order->id_buyer = $authId;
            foreach ($id_cart as $key => $value) {
                $getIdCart[] = $value;
                $order->id_cart = json_encode($getIdCart);
            }
            $order->id_transaction = $transaction->id_transaction;
            $order->date_order = Carbon::now();

            if ($order->save()) {
                foreach ($id_cart as $key => $value) {
                    $cartUpdate = Cart::where('id_cart', $value)->update([
                        'status' => 'Sukses',
                    ]);
                }
            }
        }

        return redirect()->back();

        // $id_cart = $request->idCart;
        // foreach ($id_cart as $key => $value) {
        //     $cartDelete = Cart::where('id_cart', $value);

        //     $cartDelete->delete();
        // }

        // $data = Order::create([
        //     'jumlah' => 12,
        // ]);

        // $order = new Order();

        // $order->id_order = "BRJ - " . time() . $authId;
        // $order->date_order = Carbon::now();

        // $order->save();

        // $getIdLastOrder = $order->id;

        // $id_cart = $request->idCart;
        // foreach ($id_cart as $key => $valueIdCart) {
        //     $getDataCart = Cart::where('id_cart', $valueIdCart)->get();

        //     foreach ($getDataCart as $key => $valueData) {
        //         Cart::where('id_cart', $valueIdCart)->update([
        //             'status' => 'Sukses',
        //         ]);

        //         $transaction = new Transaction();

        //         $transaction->status = "Pending";
        //         $transaction->id_buyer = $authId;
        //         $transaction->id_cart = $valueIdCart;
        //         $transaction->id_order = $getIdLastOrder;
        //         $transaction->notes = $request->notes;
        //         $transaction->date_transaction = Carbon::now();

        //         $transaction->save();
        //     }
        // }

        // return redirect()->back();
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
        return view('pages.dashboard.transaction.edit');
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
