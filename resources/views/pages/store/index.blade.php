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
                    /* transition: var(--transition-speed-ease) */
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

                .cover-wrapper .hero-active {
                    overflow: hidden;
                    width: 100%;
                    height: 100vh;
                }

                .cover-wrapper .hero-active .hero-cell {
                    width: 100%;
                    height: 100%;
                    border-radius: 0%;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

                .cover-wrapper .hero-active .hero-cell:before {
                    display: block;
                    text-align: center;
                    content: "";
                    line-height: 200px;
                    font-size: 80px;
                    color: white;
                }

                .cover-wrapper .hero-active .hero-cell .inner {
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

                .hero-active .hero-cell .inner .btn {
                    background: transparent;
                    color: white;
                    border: none;
                    position: relative;
                    font-family: 'RubberNippleFactory', sans-serif;
                    border-radius: 999px;
                    padding: 1rem 3rem;
                    outline: 2px solid white;
                    text-decoration: none;
                }

                .hero-active .hero-cell .inner .btn:hover {
                    background: var(--secondary-color);
                    position: relative;
                    font-family: 'RubberNippleFactory', sans-serif;
                    color: whitesmoke;
                    border: none;
                    border-radius: 999px;
                    outline-offset: 3px;
                    padding: 1rem 3rem;
                    -webkit-box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
                    box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
                    text-decoration: none;
                }

                @media screen and (max-width: 500px) {
                    .hero-cell[style*="background-image"] {
                        background-image: url('{{ asset('/frontend/images/artwork4-p.png') }}') !important;
                    }
                }
            </style>
            <div class="hero-active">
                <div class="hero-cell" style="background-image: url('{{ asset('/frontend/images/artwork2.png') }}');">
                    <div class="overlay">
                    </div>
                    <div class="inner">
                        {{-- <h5>Stay Stunning and positive</h5> --}}
                        <a href="{{ url('/product') }}" class="btn">Let's Explore</a>
                    </div>
                </div>
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
                background-image: url('./frontend/images/latest_bg_f.png');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                height: 400px;
            }

            /* .latest-article .latest-article-img::after {
                                            background: white;
                                            content: '';
                                            position: absolute;
                                            inset: 0;
                                            opacity: 1;
                                            z-index: -1;
                                        } */

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

                .latest-article .card-related-carousel .image-placeholder {
                    width: 200px;
                    height: 300px;
                }

                .latest-article .card-related-carousel {
                    width: 225px;
                    padding: 12px;
                    background: white;
                }

                .latest-article .card-related-carousel .card-details .caption {
                    font-size: 14px;
                }

                .latest-article .card-related-carousel .card-details .bottom-text .price-content span.price {
                    font-size: 14px;
                }
            }
        </style>
        <div class="container px-4">
            <div class="latest-article-img">
                <div class="inner-wrap">
                    @if (count($products) >= 1)
                        @php
                            // Sorting desc article and retrieving its data
                            $orderedArticlesDesc = $articles->sortByDesc('created_at');
                            $latestArticleDesc = $orderedArticlesDesc->first();
                            $getDesc = $latestArticleDesc->desc ?? 'Default Description';
                            
                            // Sorting article name and retrieving its data
                            $orderedArticlesName = $articles->sortByDesc('created_at');
                            $latestArticleName = $orderedArticlesName->first();
                            $getNamaArticle = $latestArticleName->nama_article ?? 'Default Article Name';
                        @endphp
                        <p class="mb-1">Latest Release</p>
                        <h1 class="mb-1">{{ $getNamaArticle }}</h1>
                        <h5 class="mb-0">{{ $getDesc }}</h5>
                        {{-- <a href="#" class="btn">Let's Explore</a> --}}
                    @else
                        <p class="mb-1">Latest Release</p>
                        <h1 class="mb-1">Article Name</h1>
                        <h5 class="mb-0">Description</h5>
                    @endif
                </div>
            </div>
        </div>
        <div class="container px-4 py-4">
            <img src="{{ asset('frontend/images/set1@300x.png') }}" class="image-spin-article" />
            <div class="d-flex justify-content-between align-items-center flex-wrap pb-main">
                @php
                    $latestArticle = $articles->sortByDesc('created_at')->first();
                @endphp

                @if ($latestArticle && $latestArticle->logo_header != null)
                    <div class="caption-related-product">
                        <img src="{{ asset('/storage/articles/logo/' . json_decode($latestArticle->logo_header, true)) }}"
                            alt="Logo Header" width="200">
                    </div>
                @endif
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
                <div class="carousel pt-2"
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
            @elseif (count($latestArticles) < 1)
                <div class="card-related-carousel">
                    <a href="">
                        <div class="image-placeholder"
                            style="background-image: url('{{ asset('frontend/images/product1.jpg') }}');">
                            <div class="inner-image"
                                style="background-image: url('{{ asset('frontend/images/product2.jpg') }}');">
                            </div>
                        </div>
                    </a>

                    <div class="card-details">
                        <div class="caption">Product name</div>
                        <span class="sub-caption">150m</span>
                    </div>
                    <div class="bottom-text d-flex flex-row justify-content-between">
                        <div class="price-content flex-grow-1">
                            <span>Start from</span> <span class="price">200k</span>
                        </div>
                        <div class="rating d-flex align-items-center">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" />
                            <span>4.8</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="backstory show">
        <div class="cover-wrapper">
            <style>
                body .backstory .container {
                    position: absolute;
                    width: 100%;
                    top: 17%;
                    left: 50%;
                    text-align: center;
                    transform: translate(-50%, -50%);
                }

                body .backstory.show {
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

                .cover-wrapper .backstory-slider {
                    overflow: hidden;
                    width: 100%;
                    height: 90vh;
                }

                .cover-wrapper .backstory-slider .carousel-cell {
                    width: 100%;
                    height: 100%;
                    border-radius: 0%;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

                .cover-wrapper .backstory-slider .carousel-cell:after {
                    /* background: linear-gradient(91.7deg, rgb(50, 25, 79) -4.3%, rgb(122, 101, 149) 101.8%); */
                    background: linear-gradient(178.6deg, rgb(20, 36, 50) 11.8%, rgb(124, 143, 161) 83.8%);
                    content: '';
                    position: absolute;
                    inset: 0;
                    opacity: .5;
                    z-index: -1;
                }

                .cover-wrapper .backstory-slider .carousel-cell:before {
                    display: block;
                    text-align: center;
                    content: "";
                    line-height: 200px;
                    font-size: 80px;
                    color: white;
                }

                .cover-wrapper .backstory-slider .carousel-cell .inner {
                    position: relative;
                    top: 50%;
                    transform: translateY(-50%);
                    color: white;
                    text-align: center;
                }

                .cover-wrapper .backstory-slider .carousel-cell .inner h5 {
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                }

                .backstory-slider .carousel-cell .inner .btn {
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

                .backstory-slider .carousel-cell .inner .btn:hover {
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

                .backstory-slider .flickity-prev-next-button {
                    width: 32px;
                    height: 32px;
                    background: transparent;
                }

                .backstory-slider .flickity-prev-next-button:hover {
                    background: transparent;
                }

                .backstory-slider .flickity-prev-next-button:disabled {
                    display: none;
                }

                .backstory-slider .flickity-prev-next-button .arrow {
                    fill: whitesmoke;
                }

                .backstory-slider .flickity-page-dots {
                    bottom: 30px;
                }

                .backstory-slider .flickity-page-dots .dot {
                    width: 30px;
                    height: 4px;
                    opacity: 1;
                    background: rgba(255, 255, 255, 0.5);
                    border: 0 solid white;
                    border-radius: 0;
                }

                .backstory-slider .flickity-page-dots .dot.is-selected {
                    background: var(--secondary-color);
                }

                @media screen and (max-width: 700px) {
                    .backstory-slider .flickity-prev-next-button {
                        display: none;
                    }
                }
            </style>
            <div class="backstory-slider"
                data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": 4000, "prevNextButtons":true, "fade" : false, "pageDots" : false}'>
                @foreach ($articles as $at)
                    @php
                        $getImage = json_decode($at->image);
                        $hasImage = !empty($getImage);
                        
                        $getMobileImage = json_decode($at->mobile_image);
                        $hasMobileImage = !empty($getMobileImage);
                    @endphp
                    <div class="carousel-cell{{ $hasMobileImage ? ' has-mobile-image' : '' }}"
                        data-mobile-image="{{ $hasMobileImage ? asset('/storage/articles/mobile_images/' . $getMobileImage) : '' }}"
                        style="background-image: url('{{ $hasImage ? asset('/storage/articles/images/' . $getImage) : asset('/frontend/images/background1.png') }}');">
                        <div class="overlay"></div>
                        <div class="inner"></div>
                    </div>
                @endforeach
            </div>

            <script>
                function setCarouselBackgrounds() {
                    var slider = document.querySelector('.backstory-slider');
                    var cells = slider.querySelectorAll('.carousel-cell');

                    cells.forEach(function(cell) {
                        if (window.innerWidth <= 500) {
                            var mobileImageUrl = cell.getAttribute('data-mobile-image');
                            if (mobileImageUrl) {
                                cell.style.backgroundImage = 'url("' + mobileImageUrl + '")';
                            }
                        }
                    });
                }

                // Set backgrounds initially
                setCarouselBackgrounds();

                // Update backgrounds on window resize
                window.addEventListener('resize', setCarouselBackgrounds);
            </script>

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

    <section class="resort">

        <style>
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
                font: 600 1.50rem/1.90rem "RubberNippleFactory", sans-serif;
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

                .resort .card-related-carousel .image-placeholder {
                    width: 200px;
                    height: 300px;
                }

                .resort .card-related-carousel {
                    width: 225px;
                    padding: 12px;
                    background: white;
                }

                .resort .card-related-carousel .card-details .caption {
                    font-size: 14px;
                }

                .resort .card-related-carousel .card-details .bottom-text .price-content span.price {
                    font-size: 14px;
                }
            }
        </style>
        <div class="container px-4 py-4">
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
                <div class="carousel pt-2"
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
            @elseif (count($unggulanProducts) < 1)
                <div class="card-related-carousel">
                    <a href="">
                        <div class="image-placeholder"
                            style="background-image: url('{{ asset('frontend/images/product1.jpg') }}');">
                            <div class="inner-image"
                                style="background-image: url('{{ asset('frontend/images/product2.jpg') }}');">
                            </div>
                        </div>
                    </a>

                    <div class="card-details">
                        <div class="caption">Product name</div>
                        <span class="sub-caption">150m</span>
                    </div>
                    <div class="bottom-text d-flex flex-row justify-content-between">
                        <div class="price-content flex-grow-1">
                            <span>Start from</span> <span class="price">200k</span>
                        </div>
                        <div class="rating d-flex align-items-center">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" />
                            <span>4.8</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <script>
            function changeImage(imgName) {
                image = document.getElementById('imgDisp');
                image.src = imgName;
            }
        </script>
    </section>

    <section class="video-campaign">
        <style>
            .video-campaign {
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
            }

            @media screen and (max-width: 620px) {

                #glass {
                    margin-top: 0;
                    margin-bottom: 0;
                    transition: 0.5s;
                }
            }
        </style>
        <div class="content container">
            <video id="glass" width="100%" height="75%" loop muted autoplay="autoplay">
                <source src="{{ asset('frontend/videos/teaser.mp4') }}">
            </video>
        </div>
    </section>

    <section class="about-us">
        <style>
            .about-us .container.about {
                padding: 1.25rem;
            }

            .about-us .left-col,
            .about-us .right-col {
                width: 100%;
            }

            .about-us .right-col {
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center;
            }

            .about-us .right-col .caption-font {
                display: block;
                font-weight: 400;
                font-size: 18px;
                line-height: 1.5rem;
                letter-spacing: 1%;
                color: #121212;
                margin-top: 1.25rem;
                margin-bottom: 1.25rem;
            }

            /* .image-spin-about {
                                                                                            position: relative;
                                                                                            z-index: 999;
                                                                                            right: 200px;
                                                                                            top: 100px;
                                                                                            width: 75px;
                                                                                            height: 75px;
                                                                                            animation: spin 7s infinite;
                                                                                        }

                                                                                        .image-sign-about {
                                                                                            position: relative;
                                                                                            z-index: 999;
                                                                                            right: 375px;
                                                                                            top: 150px;
                                                                                            width: 75px;
                                                                                            height: 75px;
                                                                                        } */

            @media screen and (min-width: 992px) {
                .about-us .left-col {
                    width: 40%;
                }

                .about-us .right-col {
                    width: 60%;
                }
            }

            @media screen and (max-width: 616px) {
                .about-us .right-col .caption-font {
                    display: block;
                    font-weight: 400;
                    font-size: 12px;
                    line-height: 1.5;
                }

            }
        </style>

        <div class="container about">
            <div class="d-flex flex-lg-row flex-column">
                <div class="left-col">
                    <img class="img-fluid w-100 d-lg-block d-none scroll-fadeInUp fadeInUp d4"
                        src="./frontend/images/square-bg-1.png" alt="ego">
                    <img class="image ratio r-4-3 img-fluid d-block d-lg-none scroll-fadeInUp fadeInUp d4"
                        src="./frontend/images/square-bg-1.png" alt="ego">
                </div>
                <div class="offset-lg-1 right-col">
                    {{-- <img src="{{ asset('frontend/images/set1@300x.png') }}" class="image-spin-about" />
                    <img src="{{ asset('frontend/images/sign-warna.png') }}" class="image-sign-about" /> --}}
                    <h5 class="caption-font">
                        We are constantly striving to improve
                        ourselves in the best fashion, and will
                        work with you through every process to
                        ensure you get what you want. With our
                        own factory and production line, we
                        manage and control the production
                        process itself from A to Z, to prevent
                        fatal errors and keep the percentage
                        chance of an error close to 0%. We also
                        establish procedures that help us to
                        effectively minimize time and material
                        wastage.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="img-ran pb-4">
        <img class="img-fluid w-100 d-lg-block d-none scroll-fadeInUp fadeInUp d4" src="./frontend/images/artwork1.png"
            alt="flos">
        <img class="image ratio r-4-3 img-fluid d-block d-lg-none scroll-fadeInUp fadeInUp d4"
            src="./frontend/images/artwork1.png" alt="flos">
    </section>

    @include('includes.Frontend.footer')
@endsection
