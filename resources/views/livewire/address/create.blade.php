<div>
    <br>
    <br>
    <h1 class="fs-1 fw-bold" style="font-weight: bold; font-size: 1.25rem;">Address
    </h1>
    <br>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">
        <div class="col-span-3">
            <label for="type_address" class="block mb-3 font-medium text-gray-700 text-md">Label Address</label>
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
            <label for="destinationId" class="block mb-3 font-medium text-gray-700 text-md">Country</label>
            @php
                foreach ($user as $keyid) {
                    $getDestinations = $keyid->id_country;
                }
            @endphp
            <select name="destinationId" id="destinationId" wire:click="changeEvent($event.target.value)"
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                <option value="" selected>Select Country</option>
                @foreach ($international_destinations as $destination)
                    <option value="{{ $destination->country_id }}" @if (old('destination') == $destination->country_id || $destination->country_id == $getDestinations) selected @endif>
                        {{ $destination->country_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-span-3">
            <label for="cityId" class="block mb-3 font-medium text-gray-700 text-md">City</label>
            @if ($edit_data->city_name == null)
                <input placeholder="Enter your city here" type="text" name="cityId" id="cityId"
                    autocomplete="cityId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->city_name }}" type="text" name="cityId" id="cityId"
                    autocomplete="cityId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div>
        
        <div class="col-span-3">
            <label for="subdistrictId" class="block mb-3 font-medium text-gray-700 text-md">Subdicstrict</label>
            @if ($edit_data->subdistrict_name == null)
                <input placeholder="Enter your subdistrict here" type="text" name="subdistrictId" id="subdistrictId"
                    autocomplete="subdistrictId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->subdistrict_name }}" type="text" name="subdistrictId" id="subdistrictId"
                    autocomplete="subdistrictId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div>

        <div class="col-span-3">
            <label for="areaId" class="block mb-3 font-medium text-gray-700 text-md">Area</label>
            @if ($edit_data->area_name == null)
                <input placeholder="Enter your area here" type="text" name="areaId" id="areaId"
                    autocomplete="areaId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @else
                <input value="{{ $edit_data->area_name }}" type="text" name="areaId" id="areaId"
                    autocomplete="areaId"
                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
            @endif
        </div>
        


        <div class="col-span-3">
            <label for="zipCode" class="block mb-3 font-medium text-gray-700 text-md">Post Code</label>
            @if ($edit_data->zipcode == null)
                <input placeholder=" Enter your post code here" type="text" name="zipCode" id="zipCode" autocomplete="zipCode"
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
                placeholder="Enter your detail address here" style="resize: none;"></textarea>
        @else
            <textarea name="detailAddress" id="detailAddress" cols="30" rows="5" autocomplete="detailAddress"
                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                style="resize: none;">{{ $edit_data->detail_address }}</textarea>
        @endif
    </div>
</div>
