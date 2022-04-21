<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            // $authId = Auth::user()->id;
            // $carts = Cart::join('users', 'carts.id_user', '=', 'users.id')->join('products', 'carts.id_product', '=', 'products.id_product')->where('id_user', $authId)->get();

            return view('pages.store.cart');
        } else {
            return view('auth.login');
        }
    }

    public function store(Request $request)
    {
        $idUser = Auth::user()->id;

        $cart = new Cart();

        $cart->id_user = $idUser;
        $cart->id_product = $request->idProduct;
        $cart->jumlah = $request->jumlah;
        $cart->sizeSelected = $request->sizeSelected;

        $cart->save();

        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    public function show()
    {

    }

    public function destroy($id)
    {
        $this->cartDelete = Cart::where('id_cart', $id);

        $this->cartDelete->delete();

        return redirect()->back();
    }
}
