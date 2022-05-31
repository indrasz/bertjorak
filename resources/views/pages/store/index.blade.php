@extends('layouts.front')

@section('title', ' Home')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar')


    <section class="header">

        <div class="content container px-md-4">
            @if (Auth::user())
                @if (Auth::user()->type_addres == null && Auth::user()->id_province == null && Auth::user()->id_city == null && Auth::user()->detail_address == null && Auth::user()->zipcode == null)
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                        role="alert">
                        <span class="font-medium">Peringatan!</span> Anda belum memasukkan alamat, harap mengisi alamat
                        terlebih
                        dahulu <a href="{{ route('dashboard.profile.edit', Auth::user()->id) }}"
                            style="text-decoration: underline; color: blue;">disini</a>.
                    </div>
                @endif
            @endif

            <div class="row text-center text-md-start">
                <div class="carousel"
                    data-flickity='{ "cellAlign": "left", "contain": false, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": false, "pageDots" : false, "autoPlay": 1500, "fade" : true}'>


                    <div class="col-12 col-md-6 my-auto px-md-0">
                        <div class="headline">
                            <img src="{{ asset('frontend/images/egocentric.png') }}" alt="egocentric" width="200">
                        </div>
                        <div class="sub-headline">
                            The news perspective of you
                        </div>
                        <button class="btn btn-join">Let's Explore</button>
                    </div>

                    <div class="col-12 col-md-6 my-auto px-md-0 ">

                        <div class="card w-100 mt-3 me-2 mt-lg-0"
                            style=" min-height: 500px; background-image: url({{ asset('frontend/images/banner1.jpg') }}); background-size: cover; background-position: center;">

                        </div>

                    </div>

                    <div class="col-12 col-md-6 my-auto px-md-0">
                        <div class="headline">

                            the world’s best <br class="d-none d-md-block">
                            remote talent
                            <span>
                                <svg class="d-none d-md-inline-block" width="104" height="46" viewBox="0 0 104 46"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 20C1.34315 20 0 21.3431 0 23C0 24.6569 1.34315 26 3 26V20ZM103.121 25.1213C104.293 23.9497 104.293 22.0503 103.121 20.8787L84.0294 1.7868C82.8579 0.615224 80.9584 0.615224 79.7868 1.7868C78.6152 2.95837 78.6152 4.85786 79.7868 6.02944L96.7574 23L79.7868 39.9706C78.6152 41.1421 78.6152 43.0416 79.7868 44.2132C80.9584 45.3848 82.8579 45.3848 84.0294 44.2132L103.121 25.1213ZM3 26H101V20H3V26Z"
                                        fill="#832FC5"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="sub-headline">
                            GetShayna is a 100% free resource for companies <br class="d-none d-md-block">
                            looking to find remote talent across the globe.
                        </div>
                        <button class="btn btn-join">Let's Explore</button>
                    </div>

                    <div class="col-12 col-md-6 my-auto px-md-0 ">

                        <div class="card w-100 mt-3 me-2 mt-lg-0"
                            style=" min-height: 500px; background-image: url({{ asset('frontend/images/banner2.jpg') }}); background-size: cover; background-position: center;">

                        </div>

                    </div>

                </div>
            </div>
    </section>

    <section class="resort">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800&display=swap");

            * {
                font-family: 'Poppins', sans-serif;
            }

            body .resort {
                background: #f2f6ff;
                padding-top: 100px;
                padding-bottom: 60px;
            }

            @media screen and (max-width: 768px) {
                body .resort {
                    padding-top: 60px;
                }
            }

            body .resort .content .headline {
                margin-bottom: 60px;
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 500;
                font-size: 48px;
                line-height: 68px;
                /* or 142% */
                color: #0f0f0f;
            }

            @media screen and (max-width: 768px) {
                body .resort .content .headline {
                    font-size: 2.5rem;
                }
            }

            body .resort .content * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            body .resort .content body {
                font-family: sans-serif;
            }

            body .resort .content .carousel {
                background: #EEE;
            }

            body .resort .content .carousel-cell {
                width: 28%;
                height: 200px;
                margin-right: 10px;
                background: #8C8;
                border-radius: 5px;
                counter-increment: carousel-cell;
            }

            body .resort .content .carousel-cell.is-selected {
                background: #ED2;
            }

            body .resort .content .carousel-cell:before {
                display: block;
                text-align: center;
                content: counter(carousel-cell);
                line-height: 200px;
                font-size: 80px;
                color: white;
            }

            body .resort .content .flickity-page-dots .dot {
                width: 16px;
                height: 16px;
                background: #4a4b54 !important;
                border: none;
            }

            body .resort .content .flickity-page-dots .dot.is-selected {
                background-color: #FA7219 !important;
            }

            body .resort .content .gradient-travland {
                background-image: linear-gradient(113.4deg, #7F31FF 0%, #FA7219 100%);
                min-width: 40px;
                min-height: 40px;
            }

            body .resort .content .popular-card {
                width: 272px;
                height: 344px;
                margin: 0 12px;
            }

            body .resort .content .popular-card .image-product {
                -o-object-fit: cover;
                object-fit: cover;
                object-position: center;
                -o-object-position: center;
            }

            body .resort .content .box-border {
                background: #FFFFFF;
                -webkit-box-shadow: 0px 8px 16px rgba(138, 164, 206, 0.08);
                box-shadow: 0px 8px 16px rgba(138, 164, 206, 0.08);
                border-radius: 16px;
            }

            body .resort .content .box-border img {
                border-radius: 16px 16px 0px 0px;
            }

            body .resort .content a {
                text-decoration: none;
            }

            body .resort .content .box-border .title {
                margin-top: 28px;
                font-family: Poppins;
                font-style: normal;
                font-weight: 600;
                font-size: 16px;
                line-height: 24px;
                /* identical to box height */
                color: #301B06;
            }

            body .resort .content .box-border .price {
                margin-top: 8px;
                font-family: Poppins;
                font-style: normal;
                font-weight: normal;
                font-size: 16px;
                line-height: 24px;
                /* identical to box height */
                color: #A4A7B1;
            }

            .image-product {
                width: 500px;
                height: 500px;
                padding: 100px;
                border-radius: 12px;
                overflow: hidden;
                background: #8f44fd;
                background-size: cover;
                background-position: center;
                object-position: center;
                animation: morph 3.75s linear infinite;
            }

            .image-spin img {
                width: 200px;
                height: 200px;
                animation: spin 7s infinite;
            }

            @keyframes spin {
                100% {
                    transform: rotate(720deg);
                }
            }

        </style>
        <div class="content container">
            <!-- Card Container -->
            @if (count($products) >= 1)


                <div class="carousel" style="background: #f2f6ff !important; "
                    @if (count($products) >= 2) data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": true, "pageDots": false, "prevNextButtons": true, "draggable": true }' @endif>
                    @foreach ($products as $pr)
                        @php
                            $property_images = json_decode($pr->images);
                        @endphp
                        <!-- Card Container 1 -->
                        <div class="headline justify-content-center align-items-center text-center w-100 ">
                            Popular Resorts Close

                            <div class="image-spin">
                                <img src="{{ asset('frontend/images/set1@300x.png') }}" />
                            </div>

                            <div class="mt-5 w-100 ">
                                <div class="d-flex text-center align-items-center justify-content-center">
                                    <a href="{{ route('detail.show', $pr->id_product) }}">
                                        <div class=" image-product "
                                            style="background-image: url('{{ asset('/storage/products/images/' . $property_images[0]) }}');">

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @else
                <div class="carousel" style="background: #f2f6ff !important; "
                    data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": true, "pageDots": false, "prevNextButtons": true, "draggable": true }'>
                    <!-- Card Container 1 -->
                    <div class="headline justify-content-center align-items-center text-center w-100 ">
                        Popular Resorts Close

                        <div class="image-spin">
                            <img src="{{ asset('frontend/images/set1@300x.png') }}" />
                        </div>

                        <div class="mt-5 w-100 ">
                            <a href="">
                                <div class="d-flex text-center align-items-center justify-content-center">
                                    <div class=" image-product "
                                        style="background-image: url({{ asset('frontend/images/product1.jpg') }});">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="headline justify-content-center align-items-center text-center w-100 ">
                        Popular Resorts Close

                        <div class="image-spin">
                            <img src="{{ asset('frontend/images/set1@300x.png') }}" />
                        </div>

                        <div class="mt-5 w-100 ">
                            <a href="">
                                <div class="d-flex text-center align-items-center justify-content-center">
                                    <div class=" image-product "
                                        style="background-image: url({{ asset('frontend/images/product2.jpg') }});">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            @endif
        </div>

    </section>

    {{-- Footer --}}
    @include('includes.Frontend.footer')
@endsection
