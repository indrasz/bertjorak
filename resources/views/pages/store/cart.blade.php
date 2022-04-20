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

        <livewire:cart.cart-index />
    </section>

    {{-- Footer --}}
    @include('includes.Frontend.footer')
@endsection
