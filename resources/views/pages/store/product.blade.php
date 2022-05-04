@extends('layouts.front')

@section('title', 'Product')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar')

    <style>
        .card-related-carousel:hover {
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            transition: 1s;
        }

    </style>

    <section class="related-product w-100 h-100">
        <div class="container px-4 mt-4">

            <livewire:product.product-list />
            {{-- <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card-related-carousel">
                        <div class="image-placeholder">
                            <img src="images/product1.jpg" alt="images" class="object-cover img-thumbnail" />
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

                <div class="col-12 col-lg-4">
                    <div class="card-related-carousel">
                        <div class="image-placeholder">
                            <img src="images/product1.jpg" alt="images" class="object-cover img-thumbnail" />
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

                <div class="col-12 col-lg-4">
                    <div class="card-related-carousel">
                        <div class="image-placeholder">
                            <img src="images/product1.jpg" alt="images" class="object-cover img-thumbnail" />
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
           </div> --}}
    </section>

    {{-- Footer --}}
    @include('includes.Frontend.footer')
@endsection
