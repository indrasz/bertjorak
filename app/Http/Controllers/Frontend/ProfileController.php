<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use File;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $authId = Auth::user()->id;
        $user = User::where('id', $authId)->get();
        return view('pages.dashboard.profile.index')->with('user', $user);
    }

    public function edit($id)
    {
        $editProfile = User::where('id', $id)->get();
        return view('pages.dashboard.profile.edit')->with('editProfile', $editProfile);
    }

    public function update(Request $request, $id)
    {
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
        $profile->name = $request->name;
        $profile->username = $request->username;
        $profile->phone_number = $request->phoneNumber;
        $profile->type_address = $request->type_address;
        $profile->id_province = $request->provincesId;
        $profile->id_city = $request->cityId;
        $profile->zipcode = $request->zipCode;
        $profile->detail_address = $request->detailAddress;

        $profile->save();

        return redirect()->route('dashboard.profile.index');
    }
}
