<?php

namespace App\Http\Livewire\Address;

use App\Models\City;
use App\Models\Province;
use Livewire\Component;

class Create extends Component
{

    public $provinces, $cities;
    public $provinceId = null;

    public $edit_data;

    public function mount()
    {

        $this->provinces = Province::all();
        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.address.create');
    }

    public function updatedProvinceId($province_id)
    {
        if (!is_null($province_id)) {
            $this->cities = City::where('province_id', $province_id)->get();
        }
    }
}
