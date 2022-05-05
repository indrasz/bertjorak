<div>


    <div class="caption-related-product py-3 text-center">
        Explore Our Product
    </div>

    <div class="flex border-2 rounded mx-4 mb-4">
        <div class="flex items-center justify-center px-4 border-r">
            <span class="fa fa-search form-control-feedback"></span>
        </div>
        <input type="text" class="px-4 py-2 w-full border-transparent focus:border-transparent focus:ring-0"
            style="outline: none;" wire:model="search" placeholder="Search...">
    </div>

    <div class="row min-h-screen">
        @forelse ($products as $p)
            @if (count($products) >= 1)
                <div class="col-12 col-lg-4">
                    <a href="{{ route('detail.show', $p->id_product) }}">
                        <div class="card-related-carousel">
                            <div class="image-placeholder">
                                @php
                                    $firstImg = json_decode($p->images);
                                @endphp
                                <img src="{{ asset('/storage/products/images/' . $firstImg[0]) }}" alt="images"
                                    class="object-cover img-thumbnail" />
                            </div>
                            <div class="card-details">
                                <div class="caption">{{ $p->title }}</div>
                                {{-- <span class="sub-caption">150m</span> --}}
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span class="price">@currency($p->price)</span>
                                </div>
                                {{-- <div class="rating d-flex align-items-center">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                    alt="star" />
                                <span>4.8</span>
                            </div> --}}
                            </div>
                        </div>
                    </a>
                </div>
            @else
                <div class="row mx-auto">
                    <div class="col-12 col-lg-4">
                        <div class="card-related-carousel">
                            <div class="image-placeholder">
                                <img src="{{ asset('frontend/images/product1.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
                                <img src="{{ asset('frontend/images/product1.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
                                <img src="{{ asset('frontend/images/product1.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
                                <img src="{{ asset('frontend/images/product1.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
                                <img src="{{ asset('frontend/images/product1.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
                                <img src="{{ asset('frontend/images/product1.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
                                <img src="{{ asset('frontend/images/product1.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
                                <img src="{{ asset('frontend/images/product2.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
                                <img src="{{ asset('frontend/images/product3.jpg') }}" alt="images"
                                    class="object-cover img-thumbnail" />
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
            @endif
        @empty
            <div class="w-full h-screen" style="background-color: pinkl">
                <img src="{{ asset('assets/images/no-product-found.png') }}" style="width: 50%;"
                    class="mx-auto" alt="Not Found">
            </div>
        @endforelse

        {{ $products->links() }}

    </div>
</div>
