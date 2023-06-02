<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use App\Models\User;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;
use Symfony\Component\Intl\Currencies;
use Auth;
// use Kavist\RajaOngkir\Facades\RajaOngkir;
use Livewire\Component;

class Calculate extends Component
{
    // Raja Ongkir
    public $pilihKurir, $jenisKurir, $hargaOngkir, $cartsPrice;

    // Get Alamat Admin
    public $adminAlamat, $getAlamatKantor;

    // Get Alamat Buyer
    public $authBuyer, $alamatBuyer, $getAlamatBuyer;

    // Get Weight
    public $getWeight;

    public function mount()
    {
        // Cart List
        $this->auth = Auth::user()->id;
        $this->cart = Cart::join('users', 'users.id', '=', 'carts.id_user')
            ->join('products', 'products.id_product', '=', 'carts.id_product')
            ->get();

        // Get Alamat Admin
        $this->adminAlamat = User::whereHas('roles', function ($q) {
            $q->where('name', 'admin');
        })->get();
        foreach ($this->adminAlamat as $key => $value) {
            $this->getAlamatKantor = $value->id_country;
        }

        // Get Alamat Buyer
        $this->authBuyer = Auth::user()->id;
        $this->alamatBuyer = User::find($this->authBuyer)->where('id',Auth::user()->id)->pluck('id_country')[0];
        // foreach ($this->alamatBuyer as $key => $value) 
        // {
        //     $this->getAlamatBuyer = $value->id_country;
        // }
        // dd();
        

        // Get Weight
        foreach ($this->cart as $keyWeight) {
            $this->getWeight = $keyWeight->weight;
        }

        // Get International Cost
        $this->cost = $this->getInternationalShippingCost();
    }

    public function getInternationalShippingCost()
    {
        $apiKey = 'cdb09643d78e7b3e6709bca692fa86e3';
        $origin = 23;
        $destination = $this->alamatBuyer;
        $weight = round($this->getWeight);
        $courier = 'expedito';

        if(Auth::user()->isIndonesia != true){
            $url = "https://pro.rajaongkir.com/api/v2/internationalCost";
            $params = [
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier,
            ];
        } else {
            $url = "https://pro.rajaongkir.com/api/v2/localCost";
            $params = [
                'origin' => $origin,
                'originType' => "destination",
                'destination' => $this->alamatBuyer,
                'destinationType' => "destination",
                'weight' => $weight,
                'courier' => $courier,
            ];
        }

        

        $headers = [
            'Content-Type: application/json',
            'key: ' . $apiKey,
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            // Handle the error
        }

        curl_close($ch);

        $result = json_decode($response, true);
        // Process the result and return the international shipping cost
        // $this->getAlamatBuyer = 300;
        // dd($response);
        return $result;
        
        
    }

    // ...


// class Calculate extends Component
// {
//     // Raja Ongkir
//     public $pilihKurir, $jenisKurir, $hargaOngkir, $cartsPrice;

//     // Get Alamat Admin
//     public $adminAlamat, $getAlamatKantor;

//     // Get Alamat Buyer
//     public $authBuyer, $alamatBuyer, $getAlamatBuyer;

//     // Get Weight
//     public $getWeight;

//     public function mount()
//     {
//         // Cart List
//         $this->auth = Auth::user()->id;
//         $this->cart = Cart::join('users', 'users.id', '=', 'carts.id_user')
//             ->join('products', 'products.id_product', '=', 'carts.id_product')
//             ->get();

//         // Get Alamat Admin
//         $this->adminAlamat = User::whereHas('roles', function ($q) {
//             $q->where('name', 'admin');
//         })->get();
//         foreach ($this->adminAlamat as $key => $value) {
//             $this->getAlamatKantor = $value->id_country;
//         }

//         // Get Alamat Buyer
//         $this->authBuyer = Auth::user()->id;
//         $this->alamatBuyer = User::find($this->authBuyer)->whereHas('roles', function ($q) {
//             $q->where('name', 'admin');
//         })->get();
//         foreach ($this->alamatBuyer as $key => $value) {
//             $this->getAlamatBuyer = $value->id_country;
//         }

//         // Get Weight
//         foreach ($this->cart as $keyWeight) {
//             $this->getWeight = $keyWeight->weight;
//         }

//         // Get Cost
//         $this->cost = RajaOngkir::ongkosKirim([
//             'origin' => $this->getAlamatKantor,
//             'originType' => "destination",
//             'destination' => $this->getAlamatBuyer,
//             'destinationType' => "destination",
//             'weight' => $this->getWeight,
//             'courier' => 'jne:sicepat:anteraja:jnt',
//         ])->get();
//     }

public function render()
{
    return view('livewire.cart.calculate');
}


}
