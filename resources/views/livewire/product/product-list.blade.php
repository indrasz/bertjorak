<div>
    <div class="border rounded" style="position: absolute; left: 50%; transform: translateX(-50%); width: 50%;">
        <div class="flex items-center justify-content-center px-4 border-r" style="display: flex; width: 50vw;">
            <span class="fa fa-search form-control-feedback" style="width: 50vw;"></span>
        </div>
        <input type="text" class="px-4 py-2 w-100 rounded-3" style="outline: none; border:none; width: 50vw;"
            wire:model="search" placeholder="Search...">
    </div>

    <div class="sort px-4 py-4 text-left">
        <div class="col">
            <p class="small-text mb-0">SORT BY</p>
            <div class="select-menu-sort-wrap">
                <div class="select-button-sort">
                    <span class="sbutton-list">Sort products by</span>
                    <i class="bx bx-chevron-down"></i>
                </div>
                <ul class="options">
                    <li class="option">
                        <a href="{{ URL::current() . '?sort=Featured' }}" class="option-text">Featured</a>
                    </li>
                    <li class="option">
                        <a href="{{ URL::current() . '?sort=Lowest-Price' }}" class="option-text">Price - Low to
                            High</a>
                    </li>
                    <li class="option">
                        <a href="{{ URL::current() . '?sort=Highest-Price' }}" class="option-text">Price - High to
                            Low</a>
                    </li>
                    <li class="option">
                        <a href="{{ URL::current() . '?sort=Newest' }}" class="option-text">Newest</a>
                    </li>
                    <li class="option">
                        <a href="{{ URL::current() . '?sort=Popularity' }}" class="option-text">Popularity</a>
                    </li>
                </ul>
            </div>
            {{-- <a href="{{ URL::current() }}" class="sort-font">All</a>
            <a href="{{ URL::current()."?sort=price_asc" }}" class="sort-font">Price - Low to High</a>
            <a href="{{ URL::current()."?sort=price_desc" }}" class="sort-font">Price - High to Low</a>
            <a href="{{ URL::current()."?sort=newest" }}" class="sort-font">Newest</a>
            <a href="{{ URL::current()."?sort=popularity" }}" class="sort-font">Popularity</a> --}}
        </div>
        <hr class="divider mt-4" style="border-size: 1px; color:#A4A7B1; margin: 0;">
    </div>

    <style>
        .sort.px-4 {
            font-size: 14px;
            position: relative;
            z-index: 1000;
            top: 20px;
            transform: translateY(20px);
        }

        div.col {
            width: 100%;
            display: inline-flex;
            justify-content: space-between;
            align-items: center;
        }

        .select-menu-sort-wrap {
            width: 200px;
        }

        .select-menu-sort-wrap .select-button-sort {
            display: flex;
            height: 20px;
            padding: 20px;
            font-weight: 400;
            border-radius: 8px;
            outline: 1px solid black;
            /* box-shadow: 0 0 5px rgba(0,0,0,0.1); */
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }

        .select-button-sort i {
            font-size: 20px;
            transition: 0.3s;
        }

        .select-menu-sort-wrap.active .select-button-sort i {
            transform: rotate(-180deg);
        }

        .select-menu-sort-wrap ul.options {
            display: none;
            position: absolute;
            width: 200px;
            margin-top: 10px;
            border-radius: 8px;
            padding: 10px 10px;
            outline: 1px solid black;
            /* box-shadow: 0 0 3px rgba(0,0,0,0.1); */
            background: white;
        }

        .select-menu-sort-wrap.active ul.options {
            display: block;
        }

        ul.options li.option {
            display: flex;
            height: 40px;
            cursor: pointer;
            padding: 0 10px;
            border-radius: 8px;
            align-items: center;
            background: white;
        }

        ul.options li.option:hover {
            background: #f2f2f2;
        }

        ul.options li.option a.option-text {
            color: black;
            text-decoration: none;
        }

        ul.options li.option a.option-text:hover {
            color: black;
        }

        /* .sort-desc {
            text-decoration: none;
            color: black;
            font-size: 16px;
            margin: 0 10px;
        } */
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
                img.center {
                    width: 50%;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    vertical-align: center;
                }

                @media screen and (max-width: 992px) {
                    img.center {
                        width: 100%;
                    }
                }
            </style>
            <div style="height: 100vh;">
                <img src="{{ asset('assets/images/no-product-found.png') }}" class="center" alt="Not Found">
            </div>
        @endforelse

        <div style="margin-top: 5em;">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>

    </div>
</div>

<script type="text/javascript" src="{{ asset('js/product.js') }}"></script>
