<div>

    <div class="flex border-2 rounded mx-4 mb-4">
        <div class="flex items-center justify-content-center px-4 border-r">
            <span class="fa fa-search form-control-feedback"></span>
        </div>
        <input type="text" class="px-4 py-2 w-100 rounded-3"
            style="outline: none;" wire:model="search" placeholder="Search...">
    </div>

    <div class="row min-h-screen">
        @if (count($products) >= 1)
            @forelse ($products as $p)
                <div class="col-12 col-lg-4">
                    <a href="{{ route('detail.show', $p->id_product) }}" style="text-decoration: none">
                        <div class="card-related-carousel">
                            <div class="image-placeholder">
                                @php
                                    $firstImg = json_decode($p->images);
                                @endphp
                                <img src="{{ asset('/storage/products/images/' . $firstImg[0]) }}" alt="images"
                                    class="object-cover img-thumbnail" />
                            </div>
                            <div class="card-details">
                                <div class="caption" style="font-weight: 500; font-size: 24px; color: #080E09; margin-top: 24px;">
                                    {{ $p->title }}
                                </div>
                                {{-- <span class="sub-caption">150m</span> --}}
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span class="price">@currency($p->price)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="w-full h-screen" style="background-color: pinkl">
                    <img src="{{ asset('assets/images/no-product-found.png') }}" style="width: 50%;"
                        class="mx-auto" alt="Not Found">
                </div>
            @endforelse
        @else
            <div class="row mx-auto gap-0">
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

                <div class="col-12 col-lg-4">
                    <div class="card-related-carousel">
                        <div class="image-placeholder">
                            <img src="{{ asset('frontend/images/product4.jpg') }}" alt="images"
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
                            <img src="{{ asset('frontend/images/product5.jpg') }}" alt="images"
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
                            <img src="{{ asset('frontend/images/product6.jpg') }}" alt="images"
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
                            <img src="{{ asset('frontend/images/product7.jpg') }}" alt="images"
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

        {{ $products->links() }}

    </div>
</div>
