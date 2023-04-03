@extends('layouts.front')

@section('title', ' Home')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar2')

    <section class="header">
        <div class="cover-wrapper">
            <style>
                body .header .content {
                    position: absolute;
                    width: 100%;
                    top: 17%;
                    left: 50%;
                    text-align: center;
                    transform: translate(-50%, -50%);
                }

                .cover-wrapper {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    transition: var(--transition-speed-ease)
                }

                .overlay {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                }

                .cover-wrapper .hero-slider {
                    overflow: hidden;
                    width: 100%;
                    height: 100vh;
                }

                .cover-wrapper .hero-slider .carousel-cell {
                    width: 100%;
                    height: 100%;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

                .cover-wrapper .hero-slider .carousel-cell:before {
                    display: block;
                    text-align: center;
                    content: "";
                    line-height: 200px;
                    font-size: 80px;
                    color: white;
                }

                .cover-wrapper .hero-slider .carousel-cell .inner {
                    position: relative;
                    top: 50%;
                    transform: translateY(-50%);
                    color: white;
                    text-align: center;
                }

                .hero-slider .carousel-cell .inner .btn {
                    position: relative;
                    top: 15em;
                    font-weight: 600;
                    font-family: Poppins, sans-serif;
                    color: var(--text-color);
                    border: 1px solid var(--text-color);
                    border-radius: 999px;
                    padding: 1rem 3rem;
                    -webkit-box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
                    box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
                    text-decoration: none;
                }

                .hero-slider .carousel-cell .inner .btn:hover {
                    background: var(--secondary-color);
                    color: #fff;
                    border: none;
                }

                .hero-slider .flickity-prev-next-button {
                    width: 64px;
                    height: 64px;
                    background: transparent;
                }

                .hero-slider .flickity-prev-next-button:hover {
                    background: transparent;
                }

                .hero-slider .flickity-prev-next-button .arrow {
                    fill: black;
                }

                .hero-slider .flickity-page-dots {
                    bottom: 30px;
                }

                .hero-slider .flickity-page-dots .dot {
                    width: 30px;
                    height: 4px;
                    opacity: 1;
                    background: rgba(255, 255, 255, 0.5);
                    border: 0 solid white;
                    border-radius: 0;
                }

                .hero-slider .flickity-page-dots .dot.is-selected {
                    background: var(--secondary-color);
                }
            </style>
            <div class="hero-slider" data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": 5000, "fade" : true}'>
                @foreach ($articles as $at)
                    @php
                        $getImage = json_decode($at->image);
                    @endphp
                    <div class="carousel-cell"
                        style="background-image: url('{{ asset('/storage/articles/images/' . $getImage) }}');">
                        <div class="overlay"></div>
                        <div class="inner">
                            <a href="#" class="btn">Let's Explore</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="content container">
                @if (Auth::user())
                    @if (Auth::user()->type_addres == null &&
                            Auth::user()->id_province == null &&
                            Auth::user()->id_city == null &&
                            Auth::user()->detail_address == null &&
                            Auth::user()->zipcode == null)
                        <div class="container" role="alert" style="background-color: red; width: 100%;">
                            <span class="font-medium">Peringatan!</span> Anda belum memasukkan alamat, harap mengisi alamat
                            terlebih
                            dahulu <a href="{{ route('dashboard.profile.edit', Auth::user()->id) }}"
                                style="text-decoration: underline; color: blue;">disini</a>.
                        </div>
                    @endif
                @endif
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
                width: 300px;
                height: 300px;
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
                width: 150px;
                height: 150px;
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
                            Popular Product

                            <div class="image-spin mt-2">
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


{{-- <div class="carousel"
                    data-flickity='{ "cellAlign": "left", "contain": false, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": false, "pageDots" : false, "autoPlay": 1500, "fade" : true}'>
                    @foreach ($articles as $at)
                         <div class="col-12 col-md-6 my-auto px-md-4 px-2">
                            Logo Header
                            @if ($at->logo_header != null)
                                <div class="headline">
                                    <img src="{{ asset('/storage/articles/logo/' . json_decode($at->logo_header, true)) }}"
                                        alt="Logo Header" width="200">
                                </div>
                            @endif

                            Title Header
                            @if ($at->title_header != null)
                                <div class="headline">
                                    {{ $at->title_header }}
                                </div>
                            @endif

                            <div class="sub-headline " style=" color: #000000;">
                                {{ $at->desc }}
                            </div>
                            <a href="{{ URL('product') }}">
                                <button class="mb-5 btn btn-join">Let's Explore</button>
                            </a>
                        </div> --}}

{{-- <div class="col-12 col-md-6 my-auto px-md-0 ">

                            @php
                                $getImage = json_decode($at->image);
                            @endphp

                            <div class="card w-100 mt-3 me-2 mt-lg-3"
                                style=" min-height: 500px; background-image: url('{{ asset('/storage/articles/images/' . $getImage) }}'); background-size: cover; ">
                            </div>
                        </div> 
                    @endforeach --}}

{{-- <div class="col-12 col-md-6 my-auto px-md-4 px-2"> --}}
{{-- <div class="headline">

                            The New Perspective of You<br class="d-none d-md-block">
                        </div>
                        <div class="sub-headline" style=" color: #000000;">
                            Carrying those full glam power, Bertjorak ready to orbit it all to their new EGOCENTRIC
                            collection. It’s not just unique, it’s a different perspective of it. Covered in an unusual way
                            to emblazed the basic pattern, but support you with those usual comfort you’ve always
                            experience.
                        </div>
                        <button class="btn btn-join">Let's Explore</button>
                    </div> --}}

{{-- <div class="col-12 col-md-6 my-auto px-md-0 ">

                            <div class="card w-100 mt-3 me-2 mt-lg-0">

                            </div>

                        </div>

                    </div> 
                </div> --}}
