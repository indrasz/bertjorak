<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function payment_handler(Request $request)
    {
        // return $id;
        $payment = Payment::all();

        $json = json_decode($request->getContent());

        $signatur_key = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY'));

        $orderShow = Order::where('kode_order', $json->order_id)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->join('users', 'orders.id_buyer', '=', 'users.id')->get();
        //return $orderShow;

        if ($signatur_key == $json->signature_key) {
            $payment = Payment::where('order_id', $json->order_id)->first();

            $payment->transaction_status = $json->transaction_status;

            $payment->save();
            // if ($payment->save()) {
            //     if ($payment->transaction_status == 'capture') {
            //         # code...
            //     }
            //     return  $payment->transaction_status;
            // }
        } else {
            return abort(404);
        }

        //dd($json->transaction_status);
    }
}
