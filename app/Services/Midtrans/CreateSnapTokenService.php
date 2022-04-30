<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CreateSnapTokenService extends Midtrans
{
    protected $order;

    public function __construct($order)
    {
        parent::__construct();

        $this->order = $order;
    }

    public function getSnapToken($id)
    {
        $orderShow = Order::where('kode_order', $id)->where('id_buyer', Auth::user()->id)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->join('users', 'orders.id_buyer', '=', 'users.id')->get();

        //dd($orderShow);

        foreach ($orderShow as $key) {
            $transaction_details[] = array(
                'id' => $key->id_product,
                'price' => $key->price,
                'quantity' => $key->jumlah,
                'name' => $key->title,
            );
        }

        $transaction_details[] = array(
            'id' => $key->id_kurir,
            'price' => $key->ongkir,
            'quantity' => 1,
            'name' => $key->id_kurir,
        );

        $params = array(
            /**
             * 'order_id' => id order unik yang akan digunakan sebagai "primary key" oleh Midtrans untuk
             *                  membedakan order satu dengan order lain. Key ini harus unik (tidak boleh ada duplikat).
             * 'gross_amount' => merupakan total harga yang harus dibayar customer.
             */
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => null,
            ),
            /**
             * 'item_details' bisa diisi dengan detail item dalam order.
             * Umumnya, data ini diambil dari tabel `order_items`.
             */
            'item_details' => $transaction_details,
            'customer_details' => array(
                // Key `customer_details` dapat diisi dengan data customer yang melakukan order.
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone_number,
            ),
        );

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}
