<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class ApiController extends Controller
{
    public function payment_handler(Request $request)
    {
        $json = json_decode($request->getContent());

        $signatur_key = hash('sha512', $json->order_id . $json->status_code. $json->gross_amount . env('MIDTRANS_SERVER_KEY'));

        if ($signatur_key != $json->signature_key) {
            return abort(404);
        }

        $order = Payment::where('order_id', $json->order_id)->first();
        return $order->update([
            'status_messagex' => $json->transaction_status,
        ]);
    }
}
