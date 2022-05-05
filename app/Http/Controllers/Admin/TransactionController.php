<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationController;
use App\Models\Cart;
use App\Models\City;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Province;
use Auth;
use App\Services\Midtrans\CreateSnapTokenService;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Carbon;

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
                $orderData = Order::join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('users', 'orders.id_buyer', '=', 'users.id')->paginate(5);

                return view('pages.dashboard.transaction.index')->with('orderData', $orderData);
            }
            // Buyer Transaction
            elseif (Auth::user()->hasRole('buyer')) {
                $authId = Auth::user()->id;
                // Get Order Data
                $orderData = Order::join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('users', 'orders.id_buyer', '=', 'users.id')->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->paginate(5);

                $getCart = Cart::join('products', 'carts.id_product', '=', 'products.id_product')->get();
                foreach ($orderData as $getIdOrder) {
                    $getIdO = $getIdOrder->id_order;
                }
                // dd($getIdOrder);
                // Get Cart Data
                // $cartData = Cart::where('carts.id_order', $getIdO)->join('orders', 'carts.id_order', '=', 'orders.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->get();

                return view('pages.store.dashboard-user.transaction.index')->with('orderData', $orderData)->with('getCart', $getCart);
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
        //dd($request->all());
        $authId = Auth::user()->id;

        $id_cart = $request->idCart;

        $transaction = new Transaction();

        $transaction->status_transaksi = "Pending";
        $transaction->notes = $request->notes;
        $transaction->id_kurir = $request->pilihKurir;
        $transaction->id_jenisKurir = $request->pilihJenisKurir;
        $transaction->ongkir = $request->ongkir;
        $transaction->totalCost = $request->totalPrice;
        $transaction->namaPembeli = $request->namaPembeli;
        $transaction->emailPembeli = $request->emailPembeli;
        $transaction->phonePembeli = $request->nomorPembeli;
        $transaction->date_transaction = Carbon::now();

        if ($transaction->save()) {

            $order = new Order();

            $order->kode_order = "BRJ-" . time() . $authId;
            $order->id_buyer = $authId;
            $order->id_transaction = $transaction->id_transaction;
            $order->date_order = Carbon::now();

            if ($order->save()) {
                foreach ($id_cart as $key => $value) {
                    Cart::where('id_cart', $value)->update([
                        'id_order' => $order->id,
                        'status' => 'Sukses',
                    ]);
                }
                if (Auth::user()->hasRole('buyer')) {
                    return redirect()->route('dashboard.transaction.show', $order->kode_order);
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $passNotif = NotificationController();
        // $passNotif->payment_handler($id);

        if (Auth::user()->hasRole('buyer')) {
            $orderShow = Order::where('kode_order', $id)->where('id_buyer', Auth::user()->id)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->join('users', 'orders.id_buyer', '=', 'users.id')->get();

            //$orderGetToken = Order::where('kode_order', $id)->get();
            //dd($orderShow);

            $province = Province::all();

            $city = City::all();

            $payment = Payment::all();

            $getPay = Order::where('kode_order', $id)->get();

            foreach ($getPay as $keyPay) {
                $order = $keyPay;
                //dd($order);
            }

            $snapToken = $order->snap_token;

            if (is_null($snapToken)) {
                $midtrans = new CreateSnapTokenService($order);
                $snapToken = $midtrans->getSnapToken($id);

                $order->snap_token = $snapToken;
                $order->save();
            }

            return view('pages.store.dashboard-user.transaction.detail')->with('orderShow', $orderShow)->with('snap_token', $snapToken)->with('province', $province)->with('city', $city)->with('payment', $payment)->with('payment', $payment);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if (Auth::user()) {
            if (Auth::user()->hasRole('admin')) {
                $orderShow = Order::where('orders.kode_order', $id)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->join('users', 'orders.id_buyer', '=', 'users.id')->get();

                $province = Province::all();

                $city = City::all();

                //dd($orderShow);

                return view('pages.dashboard.transaction.edit')->with('orderShow', $orderShow)->with('province', $province)->with('city', $city);
            } else {
                return redirect()->back();
            }
        }
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
        //($request->all());
        $upTransaksi = Transaction::find($id);

        $upTransaksi->status_transaksi = 'Sedang Dikirim';
        $upTransaksi->nomorResi = $request->nomorResi;

        $upTransaksi->save();

        return redirect()->back();
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

    public function payment_pos(Request $request)
    {
        $json = json_decode($request->json);
        //dd($json);

        $payment = new Payment();

        $payment->id_order = $request->idOrder;
        $payment->status_code = $json->status_code;
        $payment->status_message = $json->status_message;
        $payment->transaction_id = $json->transaction_id;
        $payment->order_id = $json->order_id;
        $payment->gross_amount = $json->gross_amount;
        $payment->payment_type = $json->payment_type;
        $payment->transaction_time = $json->transaction_time;
        $payment->transaction_status = $json->transaction_status;
        $payment->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $payment->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;

        if ($payment->save()) {
            return redirect()->back();
        }
    }

    public function success(Request $request)
    {
        $idTransaction = $request->id_sukses;

        $upTran = Transaction::find($idTransaction);

        $upTran->status_transaksi = 'Success';

        $upTran->save();

        return redirect()->back();
    }
}
