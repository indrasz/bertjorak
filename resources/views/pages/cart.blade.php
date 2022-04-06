@extends('layouts.front')

@section('title', ' Cart')

@section('content')

<section class="bertjorak-navbar container-xxl font-noto-sans">
    <nav class="bg-white navbar navbar-expand-lg navbar-light">
        <div class="container-fluid get-shayna-container">
            <a class="navbar-brand" href="#">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Talent-2/logo.svg"
                    alt="GetShayna" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class=" flex-lg-row flex-column d-flex w-100 align-items-lg-center align-items-baseline">
                    <div class="mx-lg-auto navbar-nav">
                        <a class="nav-link mx-lg-3 active" aria-current="page" href="#">
                            Home
                        </a>
                        <a class="nav-link mx-lg-3" href="#">Hire Talent</a>
                        <a class="nav-link mx-lg-3" href="#">About Us</a>
                        <span class="nav-item dropdown">
                            <a class="nav-link mx-lg-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Contact
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </span>
                    </div>
                    <div class="mt-3 flex-lg-row flex-column d-flex mt-lg-0 navbar-buttons">
                        <a href="#" class="nav-link d-inline-block">
                            <img src="{{ asset('frontend/images/icon-user.png') }}" alt="icon-user" width="45" height="45">
                            Holaa, Everyone
                        </a>
                        <a class="nav-link d-inline-block mt-2" href="#">
                            <img src="{{ asset('frontend/images/icon-cart-filled.svg') }}" alt="" />
                            <div class="cart-badge">3</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>

<section class="w-100 h-100 breadcrumb-section mt-4">
    <div class="container-xxl font-noto-sans">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ms-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>
</section>

<section class="cart-checkout w-100 h-100">
    <style>
        .card-product-preview {
            box-shadow: 0px 4px 40px rgba(172, 172, 172, 0.15);
            border-radius: 15px;
            background-color: #ffffff;
        }

        .card-product-preview .name-product-preview{
            font: 400 1.40rem/1.90rem "Poppins", sans-serif;
            color: #ADB2B8;
        }

        .card-product-preview .name-product-preview .price-preview{
            font: 500 1.20rem/1.90rem "Poppins", sans-serif;
            color: #121213;
        }

        .card-product-preview .btn-add {
            display: inline-block;
            min-width: 2.5em;
            max-height: 2.5em; /* em unit */
            border-radius: 50%;
            font-size: 11px;
            text-align: center;
            background: #bf87ff;
            color: #fefefe;
        }

        .card-product-preview .btn-minus {
            display: inline-block;
            min-width: 2.5em;
            max-height: 2.5em; /* em unit */
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

        .card-summary .caption-summary{
            font: 500 1.20rem/1.90rem "Poppins", sans-serif;
            color: #121213;
        }

        .card-summary .preview-summary{
            font: 400 1rem/1.90rem "Poppins", sans-serif;
            color: #ADB2B8;
        }

        .card-summary .total-summary{
            font: 500 1rem/1.90rem "Poppins", sans-serif;
            color: #121213;
        }

        .card-summary .input-shipping-details{
            font: 500 1rem/1.90rem "Poppins", sans-serif;
            color: #121213;
            border: 1px solid #020202;
            box-sizing: border-box;
            border-radius: 8px;
        }

        .card-summary label{
            font: 500 1rem/1.90rem "Poppins", sans-serif;
            color: #121213;
        }

        .card-summary .btn-confirm{
            background-color: var(--dull-purple);
            color: #fff;
            border-radius: 16px;
            font: 600 1rem/1.90rem "Poppins", sans-serif;
        }
    </style>
    <div class="container p-4">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card-product-preview p-3 mb-3">
                    <div class="d-flex flex-row">
                        <div class="col-2">
                            <img src="{{ asset('frontend/images/detail-photo1.jpg') }}" class="w-100" alt="">
                        </div>
                        <div class="col-4 name-product-preview ms-3">
                            Nama Product
                            <div class="price-preview">
                                200k
                            </div>
                        </div>

                        <div class="col-4 d-flex text-center align-items-center justify-content-center name-product-preview ms-3">
                            <div class="input-group border p-2 w-50 mx-auto" style="border-radius: 10px;">
                                <span class="input-group-btn">
                                    <button class="btn btn-minus pb-3 px-1" >
                                        -
                                    </button>
                                </span>
                                <input type="text" class="form-control input-number text-center border-0" max="100" value="1" />
                                <span class="input-group-btn">
                                    <button class="btn btn-add pb-3 px-1">
                                        +
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="col-2 d-flex text-center align-items-center justify-content-center name-product-preview ms-3">
                            <button class="btn">
                                <img src="{{ asset('frontend/images/icon-delete.svg') }}" width="20" alt="icon-delete">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-product-preview p-3 mb-3">
                    <div class="d-flex flex-row">
                        <div class="col-2">
                            <img src="{{ asset('frontend/images/detail-photo1.jpg') }}" class="w-100" alt="">
                        </div>
                        <div class="col-4 name-product-preview ms-3">
                            Nama Product
                            <div class="price-preview">
                                200k
                            </div>
                        </div>

                        <div class="col-4 d-flex text-center align-items-center justify-content-center name-product-preview ms-3">
                            <div class="input-group border p-2 w-50 mx-auto" style="border-radius: 10px;">
                                <span class="input-group-btn">
                                    <button class="btn btn-minus pb-3 px-1">
                                        -
                                    </button>
                                </span>
                                <input type="text" class="form-control input-number text-center border-0" max="100" value="1" />
                                <span class="input-group-btn">
                                    <button class="btn btn-add pb-3 px-1">
                                        +
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="col-2 d-flex text-center align-items-center justify-content-center name-product-preview ms-3">
                            <button class="btn">
                                <img src="{{ asset('frontend/images/icon-delete.svg') }}" width="20" alt="icon-delete">
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-4">
                <div class="card-summary px-lg-4 py-3 mb-3">
                    <div class="caption-summary mb-3">
                        Informasi Pembayaran
                    </div>

                    <div class="preview-summary">
                        Nama Product(2 Barang)

                        <span class="float-end">Rp200.000</span>
                    </div>

                    <div class="preview-summary">
                        Nama Product(2 Barang)

                        <span class="float-end">Rp200.000</span>
                    </div>

                    <div class="preview-summary">
                        Biaya Admin

                        <span class="float-end">Rp6.000</span>
                    </div>

                    <div class="preview-summary">
                        Ongkos Kirim

                        <span class="float-end">Rp10.000</span>
                    </div>

                    <div class="preview-summary mt-2">
                        <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="8" stroke="#ADB2B8" stroke-width="1.5" />
                            <path d="M12 7V12L15 13.5" stroke="#ADB2B8" stroke-width="1.5" stroke-linecap="round" />
                        </svg>

                        <span >7 Hari Pengiriman</span>
                    </div>

                    <div class="total-summary mt-1">
                        Total Harga Belanja

                        <span class="float-end">Rp410.000</span>
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
@endsection
