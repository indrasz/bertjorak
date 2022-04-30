@extends('layouts.front')

@section('title', 'Product')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar')

    <section class="related-product w-100 h-100">
        <div class="container px-4 mt-4">
            <div class="caption-related-product ps-3">
                Explore Our Product
            </div>
           <div class="row">
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
           </div>

           <div class="d-flex justify-content-center align-items-center text-center py-3">
               <button class="btn btn-primary px-4">
                   load more
               </button>
           </div>

        </div>

    </section>

    {{-- Footer --}}
    @include('includes.Frontend.footer')
@endsection
