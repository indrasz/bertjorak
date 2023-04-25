<?php

namespace App\Http\Livewire\Address;

use App\Models\City;
use App\Models\Countries;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class Create extends Component
{
    public $provinces, $cities, $countries;
    public $provinceId = null;

    public $edit_data;
    public $edit_id;

    public $user;

    public $getCountries;
    public $getCity;
    public $getProvince;

    public function mount()
    {
        $this->user = User::where('id', Auth::user()->id)->get();

        foreach ($this->user as $key) {
            $this->getCountries = $key->countries_name;
            $this->getProvince = $key->state_name;
            $this->getCity = $key->city_name;
        }

        $this->countries = Countries::orderBy('country_name', 'ASC')->get();

        $this->provinces = Province::orderBy('name_province', 'ASC')->get();
        if ($this->getCity != null) {
            $this->cities = City::where('province_id', $this->getProvince)->get();
        } else {
            $this->cities = collect();
        }
    }

    public function render()
    {
        return view('livewire.address.create');
    }

    public function changeEvent($value)
    {
        if (!is_null($value)) {
            $this->cities = City::where('province_id', $value)->get();
        }
    }
}
