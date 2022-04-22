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

<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-12">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Edit My Profile
                </h2>
                <p class="text-sm text-gray-400">
                    Enter your data Correctly & Properly
                </p>
            </div>
        </div>
    </div>
    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="col-span-12 p-4 md:pt-0">
                <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                    <form action="#" method="POST">
                        <div class="">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6">
                                        <div class="flex items-center mt-1">
                                            <span
                                                class="inline-block w-16 h-16 overflow-hidden bg-gray-100 rounded-full">
                                                <svg class="w-full h-full text-gray-300" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="md:col-span-6 lg:col-span-3">
                                        <label for="type_address"
                                            class="block mb-3 font-medium text-gray-700 text-md">Place Type </label>
                                        <input placeholder="Kost / Kantor / Rumah" type="text" name="type_address"
                                            id="type_address" autocomplete="type_address"
                                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                    </div>
                                    <div class="md:col-span-6 lg:col-span-3">
                                        <label for="detail"
                                            class="block mb-3 font-medium text-gray-700 text-md">Address</label>
                                        <input placeholder="Alamat Lengkap" type="text" name="detail" id="detail"
                                            autocomplete="detail"
                                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                    </div>
                                    <div class="md:col-span-6 lg:col-span-3">
                                        <label for="service-name"
                                            class="block mb-3 font-medium text-gray-700 text-md">Email Address</label>
                                        <input placeholder="Alex.jones@gmail.com" type="text" name="service-name"
                                            id="service-name" autocomplete="service-name"
                                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                    </div>
                                    <div class="md:col-span-6 lg:col-span-3">
                                        <label for="service-name"
                                            class="block mb-3 font-medium text-gray-700 text-md">Contact Number</label>
                                        <input placeholder="087721205555" type="number" name="service-name"
                                            id="service-name" autocomplete="service-name"
                                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                    </div>
                                    <div class="md:col-span-6 lg:col-span-3">
                                        <label for="service-name"
                                            class="block mb-3 font-medium text-gray-700 text-md">Province</label>
                                        <select
                                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <option value="">a</option>
                                        </select>
                                    </div>
                                    <div class="md:col-span-6 lg:col-span-3">
                                        <label for="service-name"
                                            class="block mb-3 font-medium text-gray-700 text-md">City</label>
                                        <select
                                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            <option value="">a</option>
                                        </select>
                                    </div>
                                    <div class="md:col-span-6 lg:col-span-3">
                                        <label for="zipCode" class="block mb-3 font-medium text-gray-700 text-md">Zip
                                            Code</label>
                                        <input placeholder="Kode pos" type="text" name="zipCode" id="zipCode"
                                            autocomplete="zipCode"
                                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 text-right sm:px-6">
                                <a href="{{ route('dashboard.user.index') }}"
                                    class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                                    Back
                                </a>
                                <button type="submit"
                                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                    onclick="return confirm('Are you sure want to submit this data ?')">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
</main>
