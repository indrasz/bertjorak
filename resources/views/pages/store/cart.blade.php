@extends('layouts.front')

@section('title', ' Cart')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar')


    <section class="w-100 h-100 breadcrumb-section mt-4">

        <div class="container-xxl font-noto-sans">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ms-4">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>

        <style>
            .card-product-preview {
                box-shadow: 0px 4px 40px rgba(172, 172, 172, 0.15);
                border-radius: 15px;
                background-color: #ffffff;
            }

            .card-product-preview .name-product-preview {
                font: 400 1.40rem/1.90rem "Poppins", sans-serif;
                color: #ADB2B8;
            }

            .card-product-preview .name-product-preview .price-preview {
                font: 500 1.20rem/1.90rem "Poppins", sans-serif;
                color: #121213;
            }

            .card-product-preview .name-product-preview .size-preview {
                font: 400 1.20rem/1.70rem "Poppins", sans-serif;
                color: #222222;
            }

            .card-product-preview .btn-add {
                display: inline-block;
                min-width: 2.5em;
                max-height: 2.5em;
                /* em unit */
                border-radius: 50%;
                font-size: 11px;
                text-align: center;
                background: #bf87ff;
                color: #fefefe;
            }

            .card-product-preview .btn-minus {
                display: inline-block;
                min-width: 2.5em;
                max-height: 2.5em;
                /* em unit */
                border-radius: 50%;
                font-size: 11px;
                text-align: center;
                border: 1px solid #ADB2B8;
                color: #ADB2B8;
                font-weight: bold;
            }

            .card-summary {
                box-shadow: 0px 4px 40px rgba(172, 172, 172, 0.15);
                border-radius: 15px;
                background-color: #ffffff;
            }

            .card-summary .caption-summary {
                font: 500 1.20rem/1.90rem "Poppins", sans-serif;
                color: #121213;
            }

            .card-summary .preview-summary {
                font: 400 1rem/1.90rem "Poppins", sans-serif;
                color: #ADB2B8;
            }

            .card-summary .total-summary {
                font: 500 1rem/1.90rem "Poppins", sans-serif;
                color: #121213;
            }

            .card-summary .input-shipping-details {
                font: 500 1rem/1.90rem "Poppins", sans-serif;
                color: #121213;
                border: 1px solid #020202;
                box-sizing: border-box;
                border-radius: 8px;
            }

            .card-summary label {
                font: 500 1rem/1.90rem "Poppins", sans-serif;
                color: #121213;
            }

            .card-summary .btn-confirm {
                background-color: var(--dull-purple);
                color: #fff;
                border-radius: 16px;
                font: 600 1rem/1.90rem "Poppins", sans-serif;
            }

        </style>

        <section class="cart-checkout w-100 h-100">
            <div class="container p-4">

                <div class="row">
                    <div class="col-12 col-lg-8">
                        @if (count($carts) >= 1)
                            @foreach ($carts as $c)
                                <div class="card-product-preview p-3 mb-3">
                                    <div class="d-flex flex-row">
                                        <div class="col-2">
                                            <?php $property_images = json_decode($c->images); ?>
                                            <img src="{{ asset('/storage/products/images/' . $property_images[0]) }}"
                                                alt="" loading="lazy" class="w-100">
                                        </div>
                                        <div class="col-4 name-product-preview ms-3">
                                            {{ $c->title }}
                                            <div class="size-preview">
                                                Jumlah item : {{ $c->jumlah }} item
                                            </div>
                                            <div class="size-preview">
                                                Size : {{ $c->sizeSelected }}
                                            </div>
                                            <div class="price-preview">
                                                @currency($c->price)
                                            </div>
                                        </div>


                                        <div
                                            class="col-4 d-flex text-center align-items-center justify-content-center name-product-preview ms-3">

                                            {{-- <livewire:cart.counter-barang /> --}}

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
                        @else
                            <div class="error-details">
                                Keranjang kamu kosong nih! Ayo belanja dulu
                            </div>
                        @endif


                    </div>

                    <div class="col-12 col-lg-4">
                        <form action="{{ route('dashboard.transaction.store') }}" method="POST">
                            @csrf
                            <div class="card-summary px-lg-4 py-3 mb-3">
                                <div class="caption-summary mb-3">
                                    Informasi Pembayaran
                                </div>
                                @if (count($carts) >= 1)
                                    @php
                                        $totalPrice = 0;
                                    @endphp
                                    @foreach ($carts as $c)
                                        <div class="preview-summary">
                                            {{ $c->title }} ({{ $c->jumlah }} item)

                                            <span class="float-end">
                                                @currency($c->price * $c->jumlah)
                                            </span>
                                        </div>
                                        @php
                                            $totalHargaItem = $c->price * $c->jumlah;
                                            $totalPrice += $totalHargaItem;
                                        @endphp
                                    @endforeach
                                @else
                                    <p class="text-center opacity-50">Belum ada barang ditambahkan.</p>
                                @endif

                                @if (count($carts) >= 1)
                                    <livewire:cart.calculate :cartsPrice="$totalPrice" />
                                @endif
                            </div>

                            @if (count($carts) >= 1)
                                <div class="card-summary px-lg-4 px-2 py-3 mb-3">
                                    <div class="caption-summary mb-3">
                                        Rincian Pengiriman
                                    </div>
                                    @foreach ($carts as $c)
                                        <input type="text" name="idCart[]" value="{{ $c->id_cart }}" hidden>
                                    @endforeach

                                    {{-- Alamat Pembeli --}}
                                    <label for="alamat" class="mb-1">Alamat Anda</label>
                                    <div class="input-group w-100 mx-auto mb-2">

                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>



                                    {{-- Catatan Dari Pembeli --}}
                                    <label for="notes" class="mb-1">Catatan</label>
                                    <div class="input-group w-100 mx-auto mb-2">

                                        <textarea name="notes" id="notes" class="form-control input-shipping-details" style="resize: none;" cols="10"
                                            rows="5"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-confirm d-inline-block w-100 p-2 mt-4">
                                        Checkout Now
                                    </button>

                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </section>

    {{-- Footer --}}
    @include('includes.Frontend.footer')
@endsection



{{-- <label for="email" class="mb-1">Email</label>
<div class="input-group w-100 mx-auto mb-2">

    <input type="text" id="email" class="form-control input-shipping-details" max="100" placeholder="Email penerima" />

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

</div> --}}
