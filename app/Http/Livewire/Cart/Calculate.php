<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use Auth;
use Illuminate\Support\Facades\DB;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Livewire\Component;

class Calculate extends Component
{
    // Calculate
    public $auth;
    public $cart;
    public $data;

    // Raja Ongkir
    public $adminCityId;
    public $userCityId;

    public $prov;
    public $kotaId;

    public function mount()
    {
        // Cart List
        $this->auth = Auth::user()->id;
        $this->cart = Cart::join('users', 'users.id', '=', 'carts.id_user')
            ->join('products', 'products.id_product', '=', 'carts.id_product')
            ->get();

        $this->userCityId = DB::table('address')->join('users', 'users.id', '=', 'address.id_user')->where('address.id_user', $this->auth)->get('city');

        $this->data = RajaOngkir::ongkosKirim([
            'origin' => 9,
            'originType' => "city",
            'destination' => 398,
            'destinationType' => "city",
            'weight' => 1300,
            'courier' => 'jne:pos:tiki',
        ])->get();

        // dd($this->data);

        // $this->data = RajaOngkir::provinsi()->all();

        // $this->kota = $this->prov;

        // dd($this->kota);

        // $this->kota = RajaOngkir::kota()->dariProvinsi($this->prov)->get();

        // dd($this->userCityId);
        // dd($this->data[0]['costs'][2]['cost'][0]['value']);

        // if ($this->jenisPilih) {
        //     # code...
        // }

        // Calculate
        // foreach ($this->cartList as $key) {
        //     dd($key);
        // }

        // $this->qty = $this->qty;
        // $this->result = $this->cartList;

    }

    public function render()
    {
        return view('livewire.cart.calculate');
    }
}
