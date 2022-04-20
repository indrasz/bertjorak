<div class="row">

    <form action="{{ route('dashboard.address.store') }}" method="POST">
        @csrf

        {{-- Tipe Tempat --}}
        <div class="col">
            <label for="type_address">Tipe Tempat</label>
            <input type="text" name="type_address" id="type_address" placeholder="Kost / Kantor / Rumah">
        </div>

        {{-- Province --}}
        <div class="col">
            <label for="provincesId">Provinsi</label>
            <select name="provincesId" id="provincesId" wire:model="provinceId">
                <option value="">Select Province</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->province_id }}">{{ $province->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- City --}}
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

        {{-- Detail Alamat --}}
        <div class="col">
            <label for="detail">Detail</label>
            <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
        </div>

        {{-- ZIP CODE --}}
        <div class="col">
            <label for="zipCode">Zip Code</label>
            <input type="text" name="zipCode" id="zipCode">
        </div>

        {{-- Button --}}
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Tambah Alamat</button>
        </div>

    </form>

</div>
