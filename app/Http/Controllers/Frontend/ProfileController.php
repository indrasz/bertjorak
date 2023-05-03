<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\City;
use App\Models\Province;
use App\Models\User;
use Auth;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class ProfileController extends Controller
{
    public function index()
    {
        $authId = Auth::user()->id;
        $user = User::where('users.id', $authId)->get();

        $userCountries = Countries::all();

        $userProv = Province::all();

        $userCity = City::all();
        //dd($userProv->id_province);

        return view('pages.dashboard.profile.index')->with('userCountries', $userCountries)->with('users', $user)->with('userProv', $userProv)->with('userCity', $userCity);
    }

    public function edit($id)
    {
        if (Auth::user()->id == $id) {
            $editProfile = User::where('id', $id)->get();
            return view('pages.dashboard.profile.edit')->with('editProfile', $editProfile);
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'phoneNumber' => 'required',
            'provincesId' => 'required',
            'type_address' => 'required',
            'cityId' => 'required',
            'zipCode' => 'required',
            'detailAddress' => 'required',
            'countriesId' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        if ($request->hasFile('avatar')) {
            // Delete old image
            $getImage = User::findOrFail($id);
            File::delete(storage_path() . '/app/public/account/' . Auth::user()->id . '/avatar/' . json_decode($getImage->avatar));

            // Store new image
            $file = $request->file('avatar');
            $name = time() . rand(1, 100) . ' - ' . $file->getClientOriginalName();
            $path = $file->storeAs('account/' . Auth::user()->id . '/avatar/', $name, 'public');
        }

        $profile = User::find($id);

        if ($request->hasFile('avatar')) {
            $profile->avatar = json_encode($name);
        }

        // Record Username Exists
        $usernameExists = User::where('username', $request->username)->first();
        if ($usernameExists != null && $usernameExists->id != Auth::user()->id) {
            return redirect()->back()->withToastError('Username already exists!');
        }


        $profile->name = $request->name;
        $profile->username = $request->username;
        $profile->phone_number = $request->phoneNumber;
        $profile->type_address = $request->type_address;
        $profile->state_name = $request->provincesId;
        $profile->city_name = $request->cityId;
        $profile->zipcode = $request->zipCode;
        $profile->detail_address = $request->detailAddress;
        $profile->countries_name = $request->countriesId;
        $profile->area_name = $request->areaId;
        

        


        if ($profile->save()) {
            return redirect()->route('dashboard.profile.index')->withToastSuccess('Your profile has been edited!');
        } else {
            return redirect()->back()->withToastError('Your profile failed to edit!');
        }
    }
}
