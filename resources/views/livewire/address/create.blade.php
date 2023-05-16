{{-- <div class="row">
    <form action="{{ route('dashboard.address.store') }}" method="POST">
        @csrf
        Tipe Tempat
        <div class="col">
            <label for="type_address">Tipe Tempat</label>
            <input type="text" name="type_address" id="type_address" placeholder="Kost / Kantor / Rumah">
        </div>
        Province
        <div class="col">
            <label for="provincesId">Provinsi</label>
            <select name="provincesId" id="provincesId" wire:model="provinceId">
                <option value="">Select Province</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->province_id }}">{{ $province->name }}</option>
                @endforeach
            </select>
        </div>
        City
        <div class="col">
            <label for="cityId">City</label>
            @if (is_array($cities) || is_object($cities))
                <select name="cityId" id="cityId">
                    <option value="" selected>Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->city_id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            @endif
        </div>
        Detail Alamat
        <div class="col">
            <label for="detail">Detail</label>
            <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
        </div>
        ZIP CODE
        <div class="col">
            <label for="zipCode">Zip Code</label>
            <input type="text" name="zipCode" id="zipCode">
        </div>
        Button
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Tambah Alamat</button>
        </div>
    </form>
</div> --}}
<div>
    <br>
    <br>
    <h1 class="fs-1 fw-bold" style="font-weight: bold; font-size: 1.25rem;">Address
    </h1>
    <br>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">
        <div class="col-span-3">
            <label for="type_address" class="block mb-3 font-medium text-gray-700 text-md">Place Type </label>
            @if ($edit_data->type_address == null)
                <input placeholder="Appartemen / House / Office" type="text" name="type_address" id="type_address"
                    autocomplete="type_address"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->type_address }}" type="text" name="type_address" id="type_address"
                    autocomplete="type_address"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div>

        <div class="col-span-3">
            <label for="countriesId" class="block mb-3 font-medium text-gray-700 text-md">Country</label>
            @php
                foreach ($user as $keyid) {
                    $getCountries = $keyid->countries_name;
                    //dd($get);
                }
            @endphp
            <select name="countriesId" id="countriesId" 
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                <option value="" selected>Select Country</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->country_name }}" @if (old('country') == $country->id || $country->id == $getCountries) selected @endif>
                        {{ $country->country_name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- <div class="col-span-3">
            <label for="countriesId" class="block mb-3 font-medium text-gray-700 text-md">Country</label>
            @if ($edit_data->countries_id == null)
                <input placeholder="Select your country" type="text" name="countriesId" id="countriesId" autocomplete="countriesId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->countries_id }}" type="text" name="countriesId" id="countriesId"
                    autocomplete="countriesId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div> --}}

        <div class="col-span-3">
            <label for="provincesId" class="block mb-3 font-medium text-gray-700 text-md">State / Province</label>
            @if ($edit_data->state_name == null)
                <input placeholder="State / Province" type="text" name="provincesId" id="provincesId"
                    autocomplete="provincesId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->state_name }}" type="text" name="provincesId" id="provincesId"
                    autocomplete="provincesId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div>

        {{-- <div class="col-span-3">
            <label for="provincesId" class="block mb-3 font-medium text-gray-700 text-md">Province</label>
            @php
                foreach ($user as $keyid) {
                    $getProv = $keyid->id_province;
                    $getCity = $keyid->id_city;
                    //dd($get);
                }
            @endphp
            <select name="provincesId" id="provincesId" wire:click="changeEvent($event.target.value)"
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                <option value="" selected>Select Province</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->province_id }}" @if (old('province') == $province->province_id || $province->province_id == $getProv) selected @endif>
                        {{ $province->name_province }}
                    </option>
                @endforeach
            </select>
        </div> --}}

        <div class="col-span-3">
            <label for="cityId" class="block mb-3 font-medium text-gray-700 text-md">City</label>
            @if ($edit_data->city_name == null)
                <input placeholder="City" type="text" name="cityId" id="cityId"
                    autocomplete="cityId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->city_name }}" type="text" name="cityId" id="cityId"
                    autocomplete="cityId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div>


        {{-- <div class="col-span-3">
            <label for="cityId" class="block mb-3 font-medium text-gray-700 text-md">City</label>
            <select name="cityId" id="cityId"
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                <option value="" selected>Select City</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->city_id }}" @if (old('city') == $city->city_id || $city->city_id == $getCity) selected @endif>
                        {{ $city->type . ' ' . $city->name_city }}</option>
                @endforeach
            </select>
        </div> --}}


        <div class="col-span-3">
            <label for="areaId" class="block mb-3 font-medium text-gray-700 text-md">Area / Kecamatan</label>
            @if ($edit_data->area_name == null)
                <input placeholder="Area / Kecamatan" type="text" name="areaId" id="areaId"
                    autocomplete="areaId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->area_name }}" type="text" name="areaId" id="areaId"
                    autocomplete="areaId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div>
        


        <div class="col-span-3">
            <label for="zipCode" class="block mb-3 font-medium text-gray-700 text-md">Postal
                Code</label>
            @if ($edit_data->zipcode == null)
                <input placeholder="Post Code" type="text" name="zipCode" id="zipCode" autocomplete="zipCode"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->zipcode }}" type="text" name="zipCode" id="zipCode"
                    autocomplete="zipCode"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div>
    </div>

    <div class="col-span-3 py-5">
        <label for="detailAddress" class="block mb-3 font-medium text-gray-700 text-md">Detail Address</label>
        @if ($edit_data->detail_address == null)
            <textarea name="detailAddress" id="detailAddress" cols="30" rows="5" autocomplete="detailAddress"
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                placeholder="Detail Address" style="resize: none;"></textarea>
        @else
            <textarea name="detailAddress" id="detailAddress" cols="30" rows="5" autocomplete="detailAddress"
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                style="resize: none;">{{ $edit_data->detail_address }}</textarea>
        @endif
    </div>
</div>
