<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Payment;

class NotificationController extends Controller
{
    public function payment_handler(Request $request)
    {
        $order = Payment::all();
        return $order;
        // $orderShow = Order::where('kode_order', $id)->where('id_buyer', Auth::user()->id)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->join('users', 'orders.id_buyer', '=', 'users.id')->get();

        $json = json_decode($request->getContent());

        $signatur_key = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY'));

        if ($signatur_key != $json->signature_key) {
            return abort(404);
        }

        $payment = Payment::where('order_id', $json->order_id)->first();

        $payment->transaction_status = $json->transaction_status;

        if ($payment->save()) {
            return  $payment->status_message;
        }
    }
}
