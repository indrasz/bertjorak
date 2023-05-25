<?php

namespace Database\Seeders;
use App\Models\InternationalDestination;
use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = file_get_contents('https://pro.rajaongkir.com/api/v2/internationalDestination?key=cdb09643d78e7b3e6709bca692fa86e3');
    $data = json_decode($response, true);

    foreach ($data['rajaongkir']['results'] as $destination) {
        InternationalDestination::create([
            'country_id' => $destination['country_id'],
            'country_name' => $destination['country_name'],
        ]);
    }
        $daftarProvinsi = RajaOngkir::provinsi()->all();
        foreach ($daftarProvinsi as $provinceRow) {
            Province::create([
                'province_id' => $provinceRow['province_id'],
                'name_province' => $provinceRow['province'],
            ]);
            $daftarKota = RajaOngkir::kota()->dariProvinsi($provinceRow['province_id'])->get();
            foreach ($daftarKota as $cityRow) {
                City::create([
                    'province_id' => $provinceRow['province_id'],
                    'city_id' => $cityRow['city_id'],
                    'type' => $cityRow['type'],
                    'name_city' => $cityRow['city_name'],
                ]);
            }
        }
    }
}
