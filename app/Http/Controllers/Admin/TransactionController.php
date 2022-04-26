<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
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
        return view('pages.dashboard.transaction.index');
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
        $authId = Auth::user()->id;
        $getIdProduct = Cart::join('users', 'carts.id_user', '=', 'users.id')->join('products', 'carts.id_product', '=', 'products.id_product')->where('id_user', $authId)->get();

        foreach ($getIdProduct as $key) {
            $as = $key->id_product;
            $getProduct[] = $as;
            dd($getProduct);
        }

        $transaction = new Transaction();

        $transaction->id_transaction = "BRJ - " . time() . $authId;
        $transaction->status = "Pending";
        $transaction->id_buyer = $authId;
        $transaction->id_product = json_encode($getProduct);
        $transaction->notes = $request->notes;
        $transaction->date_transaction = Carbon::now();

        $transaction->save();

        // $getIdProduct = Cart::join('users', 'carts.id_user', '=', 'users.id')->join('products', 'carts.id_product', '=', 'products.id_product')->where('id_user', $authId)->get();
        // foreach ($getIdProduct as $key => $value) {
        //     $ta[] = $value;
        //     dd($ta);
        // }
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
