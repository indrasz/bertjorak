<div>
    <section class="cart-checkout w-100 h-100">
        <div class="container p-4">
            <div class="row">

                <div class="col-12 col-lg-8">

                    @if (is_array($carts) || is_object($carts))
                        @foreach ($carts as $c)
                            <div class="card-product-preview p-3 mb-3">
                                <div class="d-flex flex-row">
                                    <div class="col-2">
                                        <?php $property_images = json_decode($c->images); ?>
                                        <img src="/dashboard_assets/products/images/{{ $property_images[0] }}" alt=""
                                            loading="lazy" class="w-100">
                                    </div>
                                    <div class="col-4 name-product-preview ms-3">
                                        {{ $c->title }}
                                        <div class="size-preview">
                                            Size : {{ $c->sizeSelected }}
                                        </div>
                                        <div class="price-preview">
                                            @currency($c->price)
                                        </div>
                                    </div>


                                    <div
                                        class="col-4 d-flex text-center align-items-center justify-content-center name-product-preview ms-3">

                                        <livewire:cart.counter-barang />

                                        {{-- <div class="input-group border p-2 w-50 mx-auto" style="border-radius: 10px;">
                                            <span class="input-group-btn">
                                                <button wire:click="decrement" class="btn btn-minus pb-3 px-1">
                                                    -
                                                </button>
                                            </span>
                                            <input type="text" class="form-control input-number text-center border-0"
                                                max="100" value="{{ $count }}" />
                                            <span class="input-group-btn">
                                                <button wire:click="increment" class="btn btn-add pb-3 px-1">
                                                    +
                                                </button>
                                            </span>
                                        </div> --}}

                                    </div>

                                    <div
                                        class="col-2 d-flex text-center align-items-center justify-content-center name-product-preview ms-3">

                                        <form action="{{ route('cart.destroy', $c->id_cart) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn">
                                                <img src="{{ asset('frontend/images/icon-delete.svg') }}" width="20"
                                                    alt="icon-delete">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>

                <div class="col-12 col-lg-4">
                    <div class="card-summary px-lg-4 py-3 mb-3">
                        <div class="caption-summary mb-3">
                            Informasi Pembayaran
                        </div>

                        @if (is_array($carts) || is_object($carts))
                            @foreach ($carts as $c)
                                <div class="preview-summary">
                                    {{ $c->title }}({{ $qty }} Barang)
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

                        @foreach ($alamatKantorId as $a)
                            <h1 hidden>{{ $a->city_id }}</h1>
                            <input type="text" wire:model="alamatK" placeholder="{{ $a->city_id }}">
                        @endforeach

                        {{-- <select class="col p-2" name="prov" id="prov">
                        @foreach ($data as $d => $value)
                            <option value="0">{{ $value['name'] }}</option>
                        @endforeach
                    </select> --}}

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

                                <input type="text" id="number_phone" class="form-control input-shipping-details"
                                    max="100" placeholder="No Handphone penerima" />

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

            </div>
        </div>
    </section>
</div>
