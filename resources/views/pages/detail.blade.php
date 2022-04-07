@extends('layouts.front')

@section('title', ' Detail')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar')

    <section class="w-100 h-100 breadcrumb-section mt-4">
        <div class="container-xxl font-noto-sans">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ms-4">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="w-100 h-100 detail-product">
        <div class="container mt-4 pb-5">
            <div class="row">
                <div class="col-12 col-lg-8 ">
                    <div class="card-product p-4">
                        <img src="{{ asset('frontend/images/detail-photo1.jpg') }}" class="w-100" alt="">
                        <div class="carousel pt-2"
                            data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": true, "pageDots" : false}'>
                            <img src="{{ asset('frontend/images/detail-photo1.jpg') }}" class="w-25 img-thumbnail" alt="">
                            <img src="{{ asset('frontend/images/detail-photo2.jpg') }}" class="w-25 img-thumbnail" alt="">
                            <img src="{{ asset('frontend/images/detail-photo3.jpg') }}" class="w-25 img-thumbnail" alt="">
                            <img src="{{ asset('frontend/images/detail-photo4.jpg') }}" class="w-25 img-thumbnail" alt="">
                            <img src="{{ asset('frontend/images/detail-photo5.jpg') }}" class="w-25 img-thumbnail" alt="">
                            <img src="{{ asset('frontend/images/detail-photo6.jpg') }}" class="w-25 img-thumbnail" alt="">
                            <img src="{{ asset('frontend/images/detail-photo4.jpg') }}" class="w-25 img-thumbnail" alt="">
                            <img src="{{ asset('frontend/images/detail-photo5.jpg') }}" class="w-25 img-thumbnail" alt="">
                            <img src="{{ asset('frontend/images/detail-photo6.jpg') }}" class="w-25 img-thumbnail" alt="">
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-4 ">
                    <div class="card-detail-product py-4 px-4 mt-4">
                        <div class="product-name ms-2 ps-2 mt-3">
                            Product name
                        </div>

                        <div class="price-product mt-lg-2 ms-2 ps-2 ">200K</div>

                        <div class="stock-product mt-lg-2 ms-2 ps-2 ">Stok : 30</div>

                        <div class="desc-product mt-3 px-3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                            to make a type specimen
                            book.
                        </div>

                        <div class="chose-size mt-3 px-3">
                            Pilih Ukuran :
                        </div>

                        <div class="d-flex flex-row mt-3 px-3">
                            <label class="me-3 " for="topup1">
                                <input class="d-none b" type="radio" id="topup1" name="topup" value="topup1">
                                <div class="detail-size-card justify-content-center">
                                    <div class="text-size m-0">S</div>
                                </div>
                            </label>

                            <label class="me-3" for="topup2">
                                <input class="d-none" type="radio" id="topup2" name="topup" value="topup2">
                                <div class="detail-size-card justify-content-center">
                                    <div class="text-size m-0">M</div>
                                </div>
                            </label>

                            <label class="me-3" for="topup3">
                                <input class="d-none" type="radio" id="topup3" name="topup" value="topup3">
                                <div class="detail-size-card justify-content-center">
                                    <div class="text-size m-0">L</div>
                                </div>
                            </label>
                        </div>



                        <div class="btn btn-add-cart d-inline-block w-100 p-2 mt-4">
                            Add to cart
                        </div>
                    </div>
                </div>

                <style>
                    .detail-product .card-detail-product {
                        box-shadow: 0px 4px 40px rgba(172, 172, 172, 0.15);
                        border-radius: 15px;
                        background-color: #ffffff;
                    }

                    .detail-product .card-detail-product .product-name {
                        font: 600 1.50rem/1.90rem "Poppins", sans-serif;
                    }

                    .detail-product .card-detail-product .desc-product {
                        color: #ADB2B8;
                    }

                    .detail-product .card-detail-product .price-product {
                        font: 500 1.25rem/1.90rem "Poppins", sans-serif;
                        color: #121213;
                    }

                    .detail-product .card-detail-product .stock-product {
                        font: 400 1rem/1.90rem "Poppins", sans-serif;
                    }

                    .detail-product .card-detail-product .btn-add-cart {
                        background-color: var(--dull-purple);
                        color: #fff;
                        font: 600 1rem/1.90rem "Poppins", sans-serif;
                    }

                    .detail-product input[type="radio"]:checked+.detail-size-card {
                        border: 2px solid var(--dull-purple);
                        color: var(--dull-purple);
                        width: 50px;
                        text-align: center;
                        background-color: rgba(0, 186, 255, 0.05);
                    }

                    .detail-product .detail-size-card {
                        border: 2px solid #000000;
                        border-radius: 6px;
                        width: 50px;
                        text-align: center;
                        font-size: 17px;
                    }

                    /* .detail-product .detail-size-card #icon-check{
                                transition: all 0.1s linear;
                                opacity: 0;
                            }

                            .detail-product input[type="radio"]:checked+.detail-size-card #icon-check{
                                opacity: 1;
                            } */

                </style>
            </div>
        </div>
    </section>

    <section class="related-product w-100 h-100">
        <div class="container px-4">
            <div class="caption-related-product ps-3">
                Explore Our Product
            </div>
            <div class="carousel pt-2"
                data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": true, "pageDots" : false}'>

                <div class="card-related-carousel">
                    <div class="image-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                            alt="images" />
                    </div>
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

                <div class="card-related-carousel">
                    <div class="image-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                            alt="images" />
                    </div>
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

                <div class="card-related-carousel">
                    <div class="image-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                            alt="images" />
                    </div>
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

                <div class="card-related-carousel">
                    <div class="image-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                            alt="images" />
                    </div>
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

                <div class="card-related-carousel">
                    <div class="image-placeholder">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                            alt="images" />
                    </div>
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

            </div>
        </div>

        <style>
            .related-product .caption-related-product {
                font: 600 1.50rem/1.90rem "Poppins", sans-serif;
            }

            .related-product .card-related-carousel {
                width: 325px;
                padding: 28px 28px 40px;
                border-radius: 28px;
                background: white;
                -webkit-box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
                box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
            }

            @media only screen and (max-width: 768px) {
                .related-product .card-related-carousel {
                    margin-right: 20px;
                }
            }

            .related-product .card-related-carousel .image-placeholder {
                width: 268px;
                height: 190px;
            }

            .related-product .card-related-carousel .image-placeholder img {
                width: 100%;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                border-radius: 16px;
            }

            .related-product .card-related-carousel .card-details {
                height: 70px;
            }

            .related-product .card-related-carousel .card-details .caption {
                font-weight: 700;
                font-size: 24px;
                color: #080E09;
                margin-top: 24px;
            }

            .related-product .card-related-carousel .card-details .sub-caption {
                font-weight: 400;
                color: #ADB2B8;
            }

            .related-product .card-related-carousel .bottom-text .price-content {
                color: #080E09;
                font-size: 16px;
            }

            .related-product .card-related-carousel .bottom-text .price-content span {
                font-weight: 400;
            }

            .related-product .card-related-carousel .bottom-text .price-content span.price {
                font-weight: 700;
            }

            .related-product .card-related-carousel .bottom-text .rating {
                font-weight: 700;
                font-size: 16px;
                color: #FF9900;
            }

            .related-product .card-related-carousel .bottom-text .rating img {
                margin-top: -1px;
                margin-right: 5px;
            }

        </style>
    </section>

    {{-- Footer --}}
    @include('includes.Frontend.footer')
@endsection
