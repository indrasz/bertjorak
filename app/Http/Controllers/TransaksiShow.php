<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiShow extends Controller
{
    public function show(Request $request, $id)
    {
        $orderShow = Order::where('id_buyer', Auth::user()->id)->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->where('carts.id_cart', $id)->get();

        foreach ($orderShow as $key) {
            if ($key->id_cart == $id) {
                return view('pages.detailItems')->with('orderShow', $orderShow);
            } else {
                return view('errors.404');
            }
        }


        //dd($orderShow);

        // foreach ($orderShow as $key) {
        //     if ($key->id_product != $id) {
        //         dd($orderShow);
        //     }
        // }
    }
}
