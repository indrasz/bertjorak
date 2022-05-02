<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
                $orderData = Order::join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('users', 'orders.id_buyer', '=', 'users.id')->get();

                return view('pages.dashboard.transaction.index')->with('orderData', $orderData);
            }
            // Buyer Transaction
            elseif (Auth::user()->hasRole('buyer')) {
                $authId = Auth::user()->id;
                // Get Order Data
                $orderData = Order::where('id_buyer', $authId)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->get();

                foreach ($orderData as $getIdOrder) {
                    $getIdO = $getIdOrder->id_order;
                }
                // dd($getIdOrder);
                // Get Cart Data
                // $cartData = Cart::where('carts.id_order', $getIdO)->join('orders', 'carts.id_order', '=', 'orders.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->get();

                return view('pages.store.dashboard-user.transaction.index')->with('orderData', $orderData);
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

        $transaction->status = "Pending";
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

            $time = time();
            $date = date('d', $time);
            $order->kode_order = "BRJ-" . $date . rand() . $authId;
            $order->id_buyer = $authId;
            $order->id_transaction = $transaction->id_transaction;
            $order->date_order = Carbon::now();

            if ($order->save()) {

                //dd($order->id);
                $payment = new Payment();

                $payment->id_order = $order->id;
                $payment->kode_order = $order->kode_order;
                $payment->order_id = rand();

                $payment->save();

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
    public function show(Payment $payment, $id)
    {
        if (Auth::user()->hasRole('buyer')) {
            $orderShow = Order::where('kode_order', $id)->where('id_buyer', Auth::user()->id)->join('transactions', 'orders.id_transaction', '=', 'transactions.id_transaction')->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->join('users', 'orders.id_buyer', '=', 'users.id')->get();

            $province = Province::all();

            $city = City::all();

            $getPay = Payment::all();
            // $midtrans = new CreateSnapTokenService($order);
            // $snapToken = $midtrans->getSnapToken($id);
            foreach ($getPay as $keyPay) {
                $valPay = $keyPay->where('kode_order', $id)->get();
                $as = $valPay;
                //dd($as);
            }

            $snapToken = $payment->snap_token;

            if (is_null($snapToken)) {
                // Jika snap token masih NULL, buat token snap dan simpan ke database

                $midtrans = new CreateSnapTokenService($getPay);
                $snapToken = $midtrans->getSnapToken();
                //dd($snapToken);

                // Payment::where('kode_order', $id)->update([
                //     'snap_token' => rand(),
                // ]);
                $payment->snap_token = $snapToken;
                $payment->save();
            }


            return view('pages.store.dashboard-user.transaction.detail')->with('orderShow', $orderShow)->with('snap_token', $snapToken)->with('province', $province)->with('city', $city);
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
                $orderShow = Order::where('kode_order', $id)->join('carts', 'orders.id', '=', 'carts.id_order')->join('products', 'carts.id_product', '=', 'products.id_product')->get();

                return view('pages.dashboard.transaction.edit')->with('orderShow', $orderShow);
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
