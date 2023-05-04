<div>
    <div class="border rounded" style="position: absolute; left: 50%; transform: translateX(-50%); width: 50%;">
        <div class="flex items-center justify-content-center px-4 border-r" style="display: flex; width: 50vw;">
            <span class="fa fa-search form-control-feedback" style="width: 50vw;"></span>
        </div>
        <input type="text" class="px-4 py-2 w-100 rounded-3" style="outline: none; border:none; width: 50vw;"
            wire:model="search" placeholder="Search...">
    </div>

    <div class="sort pt-4 text-center"
        style="font-size: 18px; position: relative; top:20px; transform: translateY(20px);">
        <div class="col-md-12" >
            <span class="sort-font" style="font-weight: bold; ">Sort By : </span>
            <a href="{{ URL::current() }}" class="sort-font">All</a>
            <a href="{{ URL::current()."?sort=price_asc" }}" class="sort-font">Price - Low to High</a>
            <a href="{{ URL::current()."?sort=price_desc" }}" class="sort-font">Price - High to Low</a>
            <a href="{{ URL::current()."?sort=newest" }}" class="sort-font">Newest</a>
            <a href="{{ URL::current()."?sort=popularity" }}" class="sort-font">Popularity</a>
        </div>
    </div>

    <style>
        .sort-font {
            text-decoration: none;
            color: black;
            font-size: 15px;
            margin: 0 10px;
        }
    </style>

    <div class="row min-h-screen" style="position: relative; top:32px; transform: translateY(32px);">
        @forelse ($products as $p)
            <div class="col-12 col-lg-4">
                <a href="{{ route('detail.show', $p->id_product) }}" style="text-decoration: none; color: #080E09;">
                    <div class="card-related-carousel" style="padding: 1.25em;">
                        <div class="image-placeholder">
                            @php
                                $firstImg = json_decode($p->images);
                            @endphp
                            <img src="{{ asset('/storage/products/images/' . $firstImg[0]) }}" alt="images"
                                class="object-cover img-thumbnail" />
                        </div>
                        <div class="card-details">
                            <div class="caption"
                                style="font-weight: 500; font-size: 24px; color: #080E09; margin-top: 24px;">
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
            <style>
                .center {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    vertical-align: center;
                }
            </style>
            <div style="height: 100vh;">
                <img src="{{ asset('assets/images/no-product-found.png') }}" style="width: 50%;" class="center"
                    alt="Not Found">
            </div>
        @endforelse

        <div style="margin-top: 5em;">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>

    </div>
</div>
