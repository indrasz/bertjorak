<div class="col-12 col-lg-4">
    <div class="card-summary px-lg-4 py-3 mb-3">
        <div class="caption-summary mb-3">
            Informasi Pembayaran
        </div>

        @if (is_array($cart) || is_object($cart))
            @foreach ($cart as $c)
                <div class="preview-summary">
                    {{ $c->title }}(2 Barang)

                    <input type="number" wire:model="priceBarang" value="{{ $c->price }}" hidden>
                    <span class="float-end">
                        @currency($c->price)
                    </span>
                </div>
            @endforeach
        @endif


        <div class="preview-summary">
            Jasa Kirim
        </div>

        <select class="col p-2" name="prov" id="prov">
            @foreach ($data as $d => $value)
                <option value="0">{{ $value['name'] }}</option>
            @endforeach
        </select>

        <div class="d-flex justify-content-between">
            <div class="preview-summary">
            </div>

            {{-- <select class="col p-2" wire:model="kota" name="kota" id="kota">
                @if (is_array($kota) || is_object($kota))
                    @foreach ($kota as $k => $value)
                        <option value="{{ $value['city_id'] }}">{{ $value['city_name'] }}</option>
                    @endforeach
                @endif
            </select> --}}

        </div>

        <div class="preview-summary">
            Kurir:
        </div>
        <span class="p-2">JNE</span>

        <div class="preview-summary">
            Jenis Paket:
        </div>
        <span class="p-2">YES</span>

        <div class="preview-summary">
            Ongkos Kirim:
        </div>
        <span class="p-2">Rp10.000</span>

        <div class="preview-summary mt-2">
            <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="8" stroke="#ADB2B8" stroke-width="1.5" />
                <path d="M12 7V12L15 13.5" stroke="#ADB2B8" stroke-width="1.5" stroke-linecap="round" />
            </svg>

            <span>7 Hari Pengiriman</span>
        </div>

        <div class="total-summary mt-1">
            Total Harga Belanja

            <span class="float-end">
                {{-- @currency($cartList->sum('price')) --}}
            </span>
        </div>


    </div>

    <div class="card-summary px-lg-4 px-2 py-3 mb-3">
        <div class="caption-summary mb-3">
            Rincian Pengiriman
        </div>

        <form action="">

            <label for="name" class="mb-1">Nama Lengkap</label>
            <div class="input-group w-100 mx-auto mb-2">

                <input type="text" id="name" class="form-control input-shipping-details" max="100"
                    placeholder="Nama lengkap penerima" />

            </div>

            <label for="email" class="mb-1">Email</label>
            <div class="input-group w-100 mx-auto mb-2">

                <input type="text" id="email" class="form-control input-shipping-details" max="100"
                    placeholder="Email penerima" />

            </div>

            <label for="number_phone" class="mb-1">No Handphone</label>
            <div class="input-group w-100 mx-auto mb-2">

                <input type="text" id="number_phone" class="form-control input-shipping-details" max="100"
                    placeholder="No Handphone penerima" />

            </div>

            <label for="address" class="mb-1">Alamat Lengkap</label>
            <div class="input-group w-100 mx-auto mb-2">

                <input type="text" id="address" class="form-control input-shipping-details" max="100"
                    placeholder="Alamat Lengkap penerima" />

            </div>

            <div class="btn btn-confirm d-inline-block w-100 p-2 mt-4">
                Checkout Now
            </div>
        </form>

    </div>
</div>
