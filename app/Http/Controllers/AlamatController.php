<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Alamat;
use Auth;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.dashboard.address.index');
    }

    public function store(Request $request)
    {
        $authId = Auth::user()->id;

        $address = new Alamat();

        $address->id_user = $authId;
        $address->type_address = $request->type_address;
        $address->id_country = $request->destinationId;
        $address->city_name = $request->cityId;
        $address->subdistrict_name = $request->subdistrictId;
        $address->area_name = $request->areaId;
        $address->detail_address = $request->detail;
        $address->zipcode = $request->zipCode;

        $address->save();

        return redirect()->back();
    }
}
