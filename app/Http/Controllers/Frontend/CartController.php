<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Payment;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (Auth::user()->id_province != null || Auth::user()->id_city != null || Auth::user()->detail_address != null || Auth::user()->zipcode != null) {

                $authId = Auth::user()->id;
                $cartList = Cart::join('users', 'carts.id_user', '=', 'users.id')->join('products', 'carts.id_product', '=', 'products.id_product')->where('id_user', $authId)->where('status', 'Cart')->get();

                //dd($cartList);



                // // Midtrans
                // // Set your Merchant Server Key
                // \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
                // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
                // \Midtrans\Config::$isProduction = false;
                // // Set sanitization on (default)
                // \Midtrans\Config::$isSanitized = true;
                // // Set 3DS transaction for credit card to true
                // \Midtrans\Config::$is3ds = true;

                // foreach ($cartList as $key) {
                //     $transaction_details[] = array(
                //         'id' => $key->id_product,
                //         'price' => $key->price,
                //         'quantity' => $key->jumlah,
                //         'name' => $key->title,

                //     );
                // }



                // $params = array(
                //     'transaction_details' => array(
                //         'order_id' => rand(),
                //         'gross_amount' => null,
                //     ),
                //     'item_details' => $transaction_details,
                //     'customer_details' => array(
                //         'first_name' => Auth::user()->name,
                //         'email' => Auth::user()->email,
                //         'phone' => Auth::user()->phone_number,
                //     ),
                // );

                // $snapToken = \Midtrans\Snap::getSnapToken($params);

                return view('pages.store.cart')->with('carts', $cartList);
            } else {
                return redirect()->route('dashboard.profile.edit', Auth::user()->id);
            }
        } else {
            return route('login');
        }
    }

    public function store(Request $request)
    {
        $idUser = Auth::user()->id;

        $cart = new Cart();

        $cart->id_user = $idUser;
        $cart->status = "Cart";
        $cart->id_product = $request->idProduct;
        $cart->jumlah = $request->jumlah;
        $cart->pilihanSelected = $request->pilihanSelected;
        $cart->sizeSelected = $request->sizeSelected;

        if ($cart->save()) {
            return redirect()->back();
        }

        session()->put('success', 'Item created successfully.');
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
