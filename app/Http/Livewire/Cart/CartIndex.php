<?php

namespace App\Http\Livewire\Cart;

use App\Models\Alamat;
use App\Models\Cart;
use Auth;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Livewire\Component;

class CartIndex extends Component
{
    public $authId, $carts;

    public $qty = 10;

    public $city_id = '';

    public $count = 1;
    public $userId, $cartCounter;

    public $alamatKantor, $alamatKantorId;
    public $alamatK;

    public function increment()
    {
        $this->count += 1;
    }

    public function decrement()
    {
        if ($this->count > 1) {
            $this->count -= 1;
        } else {
            session()->flash('info', "You cannot have negative value in counter");
        }
    }

    public function mount()
    {
        $this->alamatKantor = Alamat::select('city_id')->join('users', 'alamats.id_user', '=', 'users.id')->where('id_user', 1)->get();

        $this->alamatKantorId = $this->alamatKantor;

        $cost = RajaOngkir::ongkosKirim([
            'origin' => 398,
            'originType' => "city",
            'destination' => 398,
            'destinationType' => "city",
            'weight' => 1300,
            'courier' => 'jne:pos:tiki',
        ])->get();

    }

    public function render()
    {
        $this->authId = Auth::user()->id;
        $this->carts = Cart::where('id_user', $this->authId)->join('users', 'carts.id_user', '=', 'users.id')->join('products', 'carts.id_product', '=', 'products.id_product')->get();
        return view('livewire.cart.cart-index');
    }

    public function changeEvent($value)
    {
        $this->city_id = $value;
    }
}
