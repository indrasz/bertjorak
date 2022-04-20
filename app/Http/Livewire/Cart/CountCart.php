<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use Auth;
use Livewire\Component;

class CountCart extends Component
{
    public function render()
    {
        $userId = Auth::user()->id;
        $cartCounter = Cart::where('id_user', $userId)->count();
        return view('livewire.cart.count-cart')->with('cartCount', $cartCounter);
    }
}
