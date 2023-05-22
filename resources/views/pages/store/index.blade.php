@extends('layouts.front')

@section('title', ' Home')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar2')

    <section class="hero show">
        <div class="cover-wrapper">
            <style>
                body .hero .container {
                    position: absolute;
                    width: 100%;
                    top: 17%;
                    left: 50%;
                    text-align: center;
                    transform: translate(-50%, -50%);
                }

                body .hero.show {
                    animation: fade_slide 2s;
                }

                @keyframes fade_slide {
                    from {
                        opacity: 0;
                        transform: translateY(0%);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0%);
                    }
                }

                /* .row-full {
                                                                                                                    width: 99.4vw;
                                                                                                                    position: relative;
                                                                                                                    margin-left: -50vw;
                                                                                                                    margin-right: 0;
                                                                                                                    height: 28px;
                                                                                                                    left: 50%;
                                                                                                                } */

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
                    border-radius: 0%;
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
                    top: 85%;
                    transform: translateY(-50%);
                    color: white;
                    text-align: center;
                }

                /* .cover-wrapper .hero-slider .carousel-cell .inner h5 {
                                                                                                            margin-bottom: 32px;
                                                                                                            color: black;
                                                                                                        } */

                .hero-slider .carousel-cell .inner .btn {
                    background: transparent;
                    color: white;
                    border: none;
                    position: relative;
                    font-weight: 600;
                    font-family: Poppins, sans-serif;
                    border-radius: 999px;
                    padding: 1rem 3rem;
                    outline: 2px solid white;
                    text-decoration: none;
                }

                .hero-slider .carousel-cell .inner .btn:hover {
                    background: var(--secondary-color);
                    position: relative;
                    font-weight: 600;
                    font-family: Poppins, sans-serif;
                    color: whitesmoke;
                    border: none;
                    border-radius: 999px;
                    outline-offset: 3px;
                    padding: 1rem 3rem;
                    -webkit-box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
                    box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
                    text-decoration: none;
                }

                .hero-slider .flickity-prev-next-button {
                    width: 32px;
                    height: 32px;
                    background: transparent;
                }

                .hero-slider .flickity-prev-next-button:hover {
                    background: transparent;
                }

                .hero-slider .flickity-prev-next-button:disabled {
                    display: none;
                }

                .hero-slider .flickity-prev-next-button .arrow {
                    fill: whitesmoke;
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

                @media screen and (max-width: 700px) {
                    .hero-slider .flickity-prev-next-button {
                        display: none;
                    }
                }
            </style>
            <div class="hero-slider"
                data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": 4000, "prevNextButtons":true, "fade" : false, "pageDots" : false}'>
                @foreach ($articles as $at)
                    @php
                        $getImage = json_decode($at->image);
                    @endphp
                    <div class="carousel-cell"
                        style="background-image: url('{{ asset('/storage/articles/images/' . $getImage) }}');">
                        <div class="overlay">
                        </div>
                        <div class="inner">
                            {{-- <h5>Stay Stunning and positive</h5> --}}
                            <a href="#" class="btn">Let's Explore</a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="container">
                @if (Auth::user())
                    @if (Auth::user()->type_addres == null && Auth::user()->id_province == null && Auth::user()->id_city == null && Auth::user()->detail_address == null && Auth::user()->zipcode == null)
                        <div class="alert">
                            <span class="font-medium">Peringatan!</span> Anda belum memasukkan alamat, harap mengisi alamat
                            terlebih
                            dahulu <a href="{{ route('dashboard.profile.edit', Auth::user()->id) }}"
                                style="text-decoration: underline; color: blue;">disini</a>.
                        </div>
                    @endif
                @endif
            </div> --}}
        </div>
    </section>

    <section class="latest-article">
        <style>
            .latest-article .flickity-slider {
                animation: slide_image 1s;
            }

            @keyframes slide_image {
                from {
                    transform: translateY(10%);
                    opacity: 0;
                    transition: 5s;
                }

                to {
                    transform: translateY(0);
                    opacity: 1;
                    transition: 5s;
                }
            }

            .latest-article .caption-related-product {
                font: 600 1.50rem/1.90rem "Poppins", sans-serif;
            }

            .latest-article .d-flex {
                padding-bottom: 24px;
            }

            .latest-article {
                padding-top: 2rem;
                transition: 0.5s ease-in;
            }

            .latest-article .latest-article-img {
                position: relative;
                isolation: isolate;
                background-image: url('./frontend/images/latest_article.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                height: 400px;
            }

            .latest-article .latest-article-img::after {
                /* background: linear-gradient(91.7deg, rgb(50, 25, 79) -4.3%, rgb(122, 101, 149) 101.8%); */
                background: linear-gradient(178.6deg, rgb(20, 36, 50) 11.8%, rgb(124, 143, 161) 83.8%);
                content: '';
                position: absolute;
                inset: 0;
                opacity: .5;
                z-index: -1;
            }

            .latest-article .latest-article-img {
                overflow: hidden;
                display: block;
            }

            .latest-article .latest-article-img div.inner-wrap {
                font-family: 'RubberNippleFactory';
                min-height: 100%;
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                align-content: center;
                justify-content: center;
                position: relative;
                color: white;
                text-align: center;
            }

            .latest-article .card-related-carousel {
                width: 325px;
                padding: 28px 28px 40px;
                border-radius: 28px;
                background: white;
            }

            .latest-article .card-related-carousel .image-placeholder {
                width: 269px;
                height: 400px;
                /* border-radius: 12px; */
                overflow: hidden;
                background-size: cover;
                background-position: center;
                object-position: center;
                cursor: pointer;
            }

            .latest-article .card-related-carousel .card-details a {
                display: flex;
                justify-content: center;
            }

            .latest-article .card-related-carousel .card-details .caption {
                font-weight: 500;
                font-size: 18px;
                color: #080E09;
                margin-top: 16px;
                margin-bottom: 4px;
            }

            .latest-article .card-related-carousel .card-details .sub-caption {
                font-weight: 400;
                color: #ADB2B8;
            }

            .latest-article .card-related-carousel .card-details .bottom-text {
                display: flex;
                justify-content: center;
            }

            .latest-article .card-related-carousel .card-details .bottom-text .price-content {
                color: #080E09;
                font-size: 16px;
            }

            .latest-article .card-related-carousel .card-details .bottom-text .price-content span {
                font-weight: 400;
            }

            .latest-article .card-related-carousel .card-details .bottom-text .price-content span.price {
                font-weight: 700;
            }

            .latest-article .card-related-carousel .card-details .bottom-text .rating {
                font-weight: 700;
                font-size: 16px;
                color: #FF9900;
            }

            .latest-article .card-related-carousel .card-details .bottom-text .rating img {
                margin-top: -1px;
                margin-right: 5px;
            }

            .image-placeholder:hover .inner-image {
                display: block;
                transition: 5s ease-in-out;
            }

            .inner-image {
                display: none;
                width: 269px;
                height: 400px;
                border-radius: 12px;
                background-size: cover;
                background-position: center;
                object-position: center;
                animation: fade_image .6s linear;
            }

            .image-spin-article {
                position: absolute;
                left: -75px;
                width: 150px;
                height: 150px;
                animation: spin 7s infinite;
            }

            @keyframes fade_image {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @media screen and (max-width: 700px) {
                .image-spin-article {
                    display: none;
                }
            }
        </style>
        <div class="container px-4">
            <div class="latest-article-img">
                <div class="inner-wrap">
                    @php
                        //sorting desc article dan meretrieve data nya
                        $orderedArticlesDesc = $articles->sortByDesc('created_at');
                        $latestArticleDesc = $orderedArticlesDesc->first();
                        $getDesc = $latestArticleDesc->desc;
                        
                        //sorting nama article dan meretrieve data nya
                        $orderedArticlesName = $articles->sortByDesc('created_at');
                        $latestArticleName = $orderedArticlesName->first();
                        $getNamaArticle = $latestArticleName->nama_article;
                    @endphp
                    <p class="mb-0">Latest Release</p>
                    <h1 style="margin-bottom: 0;">{{ $getNamaArticle }}</h1>
                    <h5 style="margin-bottom: 0;">{{ $getDesc }}</h5>
                    {{-- <a href="#" class="btn">Let's Explore</a> --}}
                </div>
            </div>
        </div>
        <div class="container px-4 pt-4">
            <img src="{{ asset('frontend/images/set1@300x.png') }}" class="image-spin-article" />
            <div class="d-flex justify-content-between align-items-center flex-wrap pb-main">
                @foreach ($articles as $at)
                    {{-- @php
                        $orderedArticlesLogo = $articles->sortByDesc('created_at');
                        $latestArticleLogo = $orderedArticlesLogo->first();
                        $getLogo = $latestArticleDesc->logo_header;
                    @endphp --}}
                    @if ($at->logo_header != null)
                        <div class="caption-related-product">
                            <img src="{{ asset('/storage/articles/logo/' . json_decode($at->logo_header, true)) }}"
                                alt="Logo Header" width="200">
                        </div>
                    @endif
                @endforeach
                <a class="btn btn-link align-self-end pb-sm-down-0 small-text scroll-fadeInUp fadeInUp d2"
                    href="{{ url('/product') }}" style="color:black; font-size: 14px;">
                    Show All
                </a>
            </div>
            <hr class="divider" style="border-size: 1px; color:#A4A7B1; margin: 0;">
            @php
                // Retrieve the latest articles from the $products collection
                $latestArticles = $products->where('latest_article', '=', '1');
            @endphp

            @if (count($latestArticles) >= 1)
                <div class="carousel pt-4"
                    data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": true, "pageDots" : false}'>

                    @foreach ($latestArticles as $la)
                        <div class="card-related-carousel">
                            @php
                                $property_images = json_decode($la->images);
                            @endphp
                            <a href="{{ route('detail.show', $la->id_product) }}">
                                <div class="image-placeholder"
                                    style="background-image: url('{{ asset('/storage/products/images/' . $property_images[0]) }}');">
                                    <div class="inner-image"
                                        style="background-image: url('{{ asset('/storage/products/images/' . $property_images[1]) }}');">
                                    </div>
                                </div>
                            </a>

                            <div class="card-details">
                                <a href="{{ route('detail.show', $la->id_product) }}" style="text-decoration: none;">
                                    <div class="caption">{{ $la->title }}</div>
                                </a>

                                <div class="bottom-text">
                                    <div class="price-content">
                                        <span class="price">@currency($la->price)</span>
                                    </div>
                                    {{-- <div class="rating d-flex align-items-center">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" />
                            <span></span>
                        </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <hr class="divider" style="border-size: 1px; color:#A4A7B1; margin: 0;">
        </div>
    </section>

    <section class="video-campaign">
        <style>
            .video-campaign {
                padding-top: 5rem;
                padding-bottom: 5rem;
                transition: 0.5s ease-in;
            }

            .video-campaign .content.container {
                overflow: hidden;
                display: block;
                padding-left: 1.25rem;
                padding-right: 1.25rem;
            }

            #glass {
                margin-top: -100px;
                margin-bottom: -100px;
                animation: zoomInZoomOut 1.5s;
            }

            @keyframes zoomInZoomOut {
                from {
                    opacity: 0;
                    transform: scale(2, 2);
                }

                to {
                    opacity: 1;
                    transform: scale(1, 1);
                }
            }


            @media screen and (max-width: 992px) {
                #glass {
                    margin-top: 0;
                    margin-bottom: 0;
                    transition: 0.5s ease-in;
                }

                .video-campaign {
                    padding-top: 3rem;
                    padding-bottom: 3rem;
                }
            }
            
            @media screen and (max-width: 620px) {

                #glass {
                    margin-top: 0;
                    margin-bottom: 0;
                    transition: 0.5s;
                }

                .video-campaign {
                    transition: 0.5s;
                    padding-top: 2rem;
                    padding-bottom: 2rem;
                }

            }
        </style>
        <div class="content container">
            <video id="glass" width="100%" height="75%" loop muted autoplay="autoplay">
                <source src="{{ asset('frontend/videos/teaser.mp4') }}">
            </video>
        </div>
    </section>

    <section class="resort">
        <img src="{{ asset('frontend/images/set1@300x.png') }}" class="image-spin-resort" />
        <div class="container px-4">
            {{-- @if (count($products) >= 1)
                <div class="d-flex justify-content-between align-items-center flex-wrap pb-main">
                    <div class="caption-related-product">
                        Popular Products
                    </div>
                    <a class="btn btn-link align-self-end pb-sm-down-0 small-text scroll-fadeInUp fadeInUp d2"
                        href="{{ url('/product') }}" style="color:black; font-size: 14px;">
                        Show All
                    </a>
                </div>
                <hr class="divider" style="border-size: 1px; color:#A4A7B1; margin: 0;">

                <div class="carousel pt-4"
                    data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": true, "pageDots" : false}'>

                    @foreach ($products as $pr)
                        @if ($pr->id_product)
                            <div class="card-related-carousel">
                                @php
                                    $property_images = json_decode($pr->images);
                                @endphp
                                <a href="{{ route('detail.show', $pr->id_product) }}">
                                    <div class="image-placeholder"
                                        style="background-image: url('{{ asset('/storage/products/images/' . $property_images[0]) }}');">
                                        <div class="inner-image"
                                            style="background-image: url('{{ asset('/storage/products/images/' . $property_images[1]) }}');">
                                        </div>
                                    </div>
                                </a>

                                <div class="card-details">
                                    <a href="{{ route('detail.show', $pr->id_product) }}" style="text-decoration: none;">
                                        <div class="caption">{{ $pr->title }}</div>
                                    </a>

                                    <div class="bottom-text">
                                        <div class="price-content">
                                            <span class="price">@currency($pr->price)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif --}}
            @php
                // Retrieve the latest articles from the $products collection
                $unggulanProducts = $products->where('unggulan', '=', '1');
            @endphp

            @if (count($unggulanProducts) >= 1)
                <div class="d-flex justify-content-between align-items-center flex-wrap pb-main">
                    <div class="caption-related-product">
                        Popular Products
                    </div>
                    <a class="btn btn-link align-self-end pb-sm-down-0 small-text scroll-fadeInUp fadeInUp d2"
                        href="{{ url('/product') }}" style="color:black; font-size: 14px;">
                        Show All
                    </a>
                </div>
                <hr class="divider" style="border-size: 1px; color:#A4A7B1; margin: 0;">
                <div class="carousel pt-4"
                    data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": true, "pageDots" : false}'>

                    @foreach ($unggulanProducts as $up)
                        <div class="card-related-carousel">
                            @php
                                $property_images = json_decode($up->images);
                            @endphp
                            <a href="{{ route('detail.show', $up->id_product) }}">
                                <div class="image-placeholder"
                                    style="background-image: url('{{ asset('/storage/products/images/' . $property_images[0]) }}');">
                                    <div class="inner-image"
                                        style="background-image: url('{{ asset('/storage/products/images/' . $property_images[1]) }}');">
                                    </div>
                                </div>
                            </a>

                            <div class="card-details">
                                <a href="{{ route('detail.show', $up->id_product) }}" style="text-decoration: none;">
                                    <div class="caption">{{ $up->title }}</div>
                                </a>

                                <div class="bottom-text">
                                    <div class="price-content">
                                        <span class="price">@currency($up->price)</span>
                                    </div>
                                    {{-- <div class="rating d-flex align-items-center">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" />
                            <span></span>
                        </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <style>
            .resort {
                padding-bottom: 32px;
            }
            .resort .flickity-slider {
                animation: slide_image 1s;
            }

            @keyframes slide_image {
                from {
                    transform: translateY(10%);
                    opacity: 0;
                    transition: 5s;
                }

                to {
                    transform: translateY(0);
                    opacity: 1;
                    transition: 5s;
                }
            }

            .resort .caption-related-product {
                font: 600 1.50rem/1.90rem "Poppins", sans-serif;
            }

            .resort .d-flex {
                padding-bottom: 24px;
            }

            .resort .card-related-carousel {
                width: 325px;
                padding: 28px 28px 40px;
                border-radius: 28px;
                background: white;
            }

            .resort .card-related-carousel .image-placeholder {
                width: 269px;
                height: 400px;
                /* border-radius: 12px; */
                overflow: hidden;
                background-size: cover;
                background-position: center;
                object-position: center;
                cursor: pointer;
            }

            .resort .card-related-carousel .card-details a {
                display: flex;
                justify-content: center;
            }

            .resort .card-related-carousel .card-details .caption {
                font-weight: 500;
                font-size: 18px;
                color: #080E09;
                margin-top: 16px;
                margin-bottom: 4px;
            }

            .resort .card-related-carousel .card-details .sub-caption {
                font-weight: 400;
                color: #ADB2B8;
            }

            .resort .card-related-carousel .card-details .bottom-text {
                display: flex;
                justify-content: center;
            }

            .resort .card-related-carousel .card-details .bottom-text .price-content {
                color: #080E09;
                font-size: 16px;
            }

            .resort .card-related-carousel .card-details .bottom-text .price-content span {
                font-weight: 400;
            }

            .resort .card-related-carousel .card-details .bottom-text .price-content span.price {
                font-weight: 700;
            }

            .resort .card-related-carousel .card-details .bottom-text .rating {
                font-weight: 700;
                font-size: 16px;
                color: #FF9900;
            }

            .resort .card-related-carousel .card-details .bottom-text .rating img {
                margin-top: -1px;
                margin-right: 5px;
            }

            .image-placeholder:hover .inner-image {
                display: block;
                transition: 5s ease-in-out;
            }

            .inner-image {
                display: none;
                width: 269px;
                height: 400px;
                border-radius: 12px;
                background-size: cover;
                background-position: center;
                object-position: center;
                animation: fade_image .6s linear;
            }

            @keyframes fade_image {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            .image-spin-resort {
                position: absolute;
                left: -75px;
                width: 150px;
                height: 150px;
                animation: spin 7s infinite;
            }

            @media screen and (max-width: 700px) {
                .image-spin-resort {
                    display: none;
                }
            }
        </style>

        <script>
            function changeImage(imgName) {
                image = document.getElementById('imgDisp');
                image.src = imgName;
            }
        </script>
    </section>

    {{-- <section class="resort">
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
                width: 250px;
                height: 400px;
                border-radius: 12px;
                overflow: hidden;
                background: #8f44fd;
                background-size: cover;
                background-position: center;
                object-position: center;
                animation: morph 3.75s linear infinite;
            }

            .image-product:hover .inner-image {
                display: block;
                transition: 5s ease-in-out;
            }

            .inner-image {
                display: none;
                width: 250px;
                height: 400px;
                border-radius: 12px;
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
                        <div class="headline justify-content-center align-items-center text-right w-100 ">
                            Popular Product

                            {{-- <div class="image-spin mt-2">
                                <img src="{{ asset('frontend/images/set1@300x.png') }}" />
                            </div> 

                            <div class="mt-5 w-100 ">
                                <div class="d-flex text-center align-items-center justify-content-center">
                                    <a href="{{ route('detail.show', $pr->id_product) }}">
                                        <div class=" image-product"
                                            style="background-image: url('{{ asset('/storage/products/images/' . $property_images[0]) }}');">
                                            <div class="inner-image"
                                                style="background-image: url('{{ asset('/storage/products/images/' . $property_images[1]) }}');">
                                            </div>
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
                                        style="background-image: url({{ asset('frontend/images/product2.jpg') }});">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            @endif
        </div>

    </section> --}}
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
