<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;

class CounterBarang extends Component
{
    public $count = 1;
    public $qty;
    public $userId, $cartCounter;

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

    public function render()
    {
        return view('livewire.cart.counter-barang');
    }
}
