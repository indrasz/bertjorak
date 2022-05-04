@extends('layouts.front')

@section('title', ' Home')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar')


    <section class="header">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;0,900;1,400&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800&display=swap");

            * {
                font-family: 'Montserrat', sans-serif;
            }

            body .header {
                background: #FFFFFF;
            }

            @media screen and (min-width: 768px) {
                body .header nav {
                    padding-top: 30px;
                }
            }

            body .header nav .get-shayna-container {
                padding: 0px 20px;
            }

            @media (min-width: 992px) {
                body .header nav .get-shayna-container {
                    padding: 0px 60px;
                }
            }

            body .header nav a,
            body .header nav a:hover {
                color: #111F37 !important;
            }

            body .header nav .navigation a {
                font-family: 'Noto Sans';
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 22px;
                /* identical to box height */
                color: #0F1C2D;
                opacity: 0.6;
            }

            body .header nav .navigation .active {
                font-family: 'Noto Sans';
                font-style: normal;
                font-weight: bold;
                font-size: 16px;
                line-height: 22px;
                /* identical to box height */
                color: #101D2E !important;
            }

            body .header nav .started {
                border: 1px solid #7F31FF;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                border-radius: 50px;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 12px 16px;
                font-family: 'Noto Sans';
                font-style: normal;
                font-weight: normal;
                font-size: 16px;
                line-height: 22px;
                /* identical to box height */
                color: #7F31FF !important;
            }

            @media screen and (max-width: 768px) {
                body .header nav .started {
                    width: 100% !important;
                }
            }

            body .header .content {
                padding-bottom: 60px;
            }

            body .header .content .headline {
                font-style: normal;
                font-weight: 400;
                font-size: 3rem;
                line-height: 60px;
                /* or 130% */
                color: #1E2A39;
            }

            @media screen and (max-width: 768px) {
                body .header .content .headline {
                    font-size: 2.25rem;
                    line-height: 2.5rem;
                }
            }

            body .header .content .sub-headline {
                margin-top: 24px;
                font-family: 'Noto Sans' !important;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 160%;
                /* or 32px */
                color: #626A7F;
            }

            body .header .content .btn-join {
                margin-top: 54px;
                background-image: linear-gradient(113.4deg, #7F31FF 0%, #FA7219 100%);

                -webkit-box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
                box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
                border-radius: 50px;
                padding: 20px 32px 20px 32px;
                font-family: 'Noto Sans';
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 28px;
                /* identical to box height, or 140% */
                color: #FFFFFF;
            }

            @media screen and (max-width: 768px) {
                body .header .content .btn-join {
                    margin-top: 25px;
                }
            }

            body .header .content .partner {
                margin-top: 25px;
                margin-bottom: 24px;
                font-family: 'Noto Sans' !important;
                font-style: normal;
                font-weight: 600;
                font-size: 16px;
                line-height: 150%;
                /* identical to box height, or 24px */
                text-align: center;
                color: #1E2A39;
                opacity: 0.6;
            }

            @media screen and (max-width: 768px) {
                body .header .content .partner {
                    font-size: 12px;
                }
            }

            body .header .content .partners {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                line-height: 150%;
                /* identical to box height, or 36px */
                letter-spacing: -0.02em;
                color: #1E2A39;
                opacity: 0.4;
                margin-right: 60px;
            }

            @media screen and (max-width: 768px) {
                body .header .content .partners {
                    margin-right: 3px;
                    margin-left: 3px;
                    font-size: 22px;
                    line-height: 2rem;
                }
            }

            body .header .content .mr-0 {
                margin-right: 0 !important;
            }

        </style>
        <div class="content container px-md-4">
            <div class="row mx-0 text-center text-md-start">
                <div class="col-md-6 my-auto px-md-0">
                    <div class="headline">
                        The free way to find <br class="d-none d-md-block">
                        the world’s best <br class="d-none d-md-block">
                        remote talent
                        <span>
                            <svg class="d-none d-md-inline-block" width="104" height="46" viewBox="0 0 104 46" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
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
                    <a href="{{ route('all-product') }}">
                        <button class="btn btn-join">Let's Explore</button>
                    </a>
                </div>
                <div class="col-md-6 my-auto px-md-0 carousel"
                    data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": true, "prevNextButtons": false, "draggable": true, "pageDots" : true, "autoPlay" : 1500, "friction" : 0.4, "selectedAttraction" : 0.01}'>

                    <div class="card w-100 mt-3 me-2 mt-lg-0"
                        style=" min-height: 500px; background-image: url({{ asset('/frontend/images/banner1.jpg') }}); background-size: cover; background-position: center;">

                    </div>
                    <div class="card w-100 mt-3 me-2 mt-lg-0"
                        style=" min-height: 500px; background-image: url({{ asset('/frontend/images/banner2.jpg') }}); background-size: cover; background-position: center;">

                    </div>

                    <div class="card w-100 mt-3 me-2 mt-lg-0"
                        style=" min-height: 500px; background-image: url({{ asset('/frontend/images/banner3.jpg') }}); background-size: cover; background-position: center;">

                    </div>
                    <div class="card w-100 mt-3 me-2 mt-lg-0"
                        style=" min-height: 500px; background-image: url({{ asset('/frontend/images/banner4.jpg') }}); background-size: cover; background-position: center;">

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
                max-width: 40px;
                max-height: 40px;
            }

            body .resort .content .popular-card {
                width: 272px;
                height: 344px;
                margin: 0 12px;
            }

            body .resort .content .popular-card .image-product {
                -o-object-fit: cover;
                object-fit: cover;
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

        </style>
        <div class="content container">
            <div class="headline">
                Popular Resorts Close <br class="d-none d-md-block">
                to Loften Iceland
            </div>
            <!-- Flickity HTML init -->
            <div class="carousel" style="background: #f2f6ff !important;"
                data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": true, "pageDots": true, "prevNextButtons": false, "draggable": true }'>
                <!-- Card Container 1 -->
                @if (!empty($products))
                    @foreach ($products as $pl)
                        <div class="box-border relative bg-white rounded-2xl popular-card">
                            <div class="flex flex-col">
                                <a href="{{ route('detail.show', $pl->id_product) }}"
                                    class="absolute z-40 inset-0 transition duration-300 ease-out hover:bg-gray-900 rounded-2xl hover:bg-opacity-20">
                                    <div class="position-absolute z-10 pt-3 ps-3">
                                        <div
                                            class="p-3 text-sm font-semibold text-white rounded-circle badge-rating gradient-travland">
                                            {{ $pl->stock }}
                                        </div>
                                    </div>
                                    <div class="relative">
                                        @php
                                            $property_images = json_decode($pl->images);
                                        @endphp
                                        <img src="{{ asset('/storage/products/images/' . $property_images[0]) }}"
                                            class="" alt="Image alt text" />
                                    </div>

                                    <div class="flex flex-col gap-2 px-4 z-10">
                                        <div class="title">{{ $pl->title }}</div>
                                        <div class="price"> @currency($pl->price)</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif


                {{-- Dummy Product --}}
                {{-- <div class="box-border relative bg-white rounded-2xl popular-card">
                    <div class="flex flex-col">
                        <div class="position-absolute z-10 pt-3 ps-3">
                            <div class="p-2 text-sm font-semibold text-white rounded-circle badge-rating gradient-travland">
                                9.2
                            </div>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('/frontend/images/product1.jpg') }}"
                                alt="GetShayna" class="image-product w-100" height="250px" />
                        </div>
                        <div class="flex flex-col gap-2 px-4">
                            <div class="title">Nusfjord Arctic</div>
                            <div class="price">From $238/week</div>
                        </div>
                        <a href="#"
                            class="absolute z-40 inset-0 transition duration-300 ease-out hover:bg-gray-900 hover:bg-opacity-20"></a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('includes.Frontend.footer')
@endsection
