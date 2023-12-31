<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style/navbar_style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    {{-- nav items --}}
    <header>
        <a class="navbar-brand absolute" href="/" to="/">
            <img src="{{ asset('frontend/images/main-logo.png') }}" class="logo-light img-fluid" width="100" />
            <img src="{{ asset('frontend/images/dark-logo.png') }}" class="logo-dark img-fluid" width="100" />
        </a>

        <ul class="navbar">
            <li class="nav-item">
                <a href="/" class="nav-link">
                    {{-- <span class="bx bx-home"></span> --}}
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/product') }}" class="nav-link">
                    {{-- <span class="ri-t-shirt-line"></span> --}}
                    Product
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/about') }}" class="nav-link">
                    {{-- <span class="bx bx-info-circle"></span> --}}
                    About
                </a>
            </li>
        </ul>

        <div class="right-nav-item">
            @auth
                {{-- Buyer --}}
                @if (Auth::user()->hasRole('buyer'))
                    <a class='bx bx-search' href="{{ url('/product') }}" id="search-icon"></a>
                    <a class="ri-shopping-cart-2-line" href="{{ route('cart.index') }}" id="cart-icon">
                        <livewire:cart.count-cart />
                    </a>

                    <div class="navbar-nav ms-auto mt-lg-0">
                        <a class="nav-link d-flex align-items-center" href="{{ route('dashboard.index') }}">
                            @php
                                $convertImg = json_decode(Auth::user()->avatar);
                            @endphp

                            @if ($convertImg == null)
                                <img src="{{ asset('assets/images/blank-profile-picture.png') }}" alt="icon-user"
                                    width="45" height="45" style="border-radius: 50%;">
                            @elseif ($convertImg != null)
                                <img src="{{ asset('/storage/account/' . Auth::user()->id . '/avatar/' . $convertImg) }}"
                                    alt="icon-user" width="45" height="45" style="border-radius: 50%;">
                            @endif
                        </a>
                        {{-- <ul class="dropdown-menu" style="cursor: pointer"> --}}
                        {{-- <li>
                                        <a href="{{ route('logout') }}"
                                            class="dropdown-hover d-flex align-items-center justify-content-center text-start text-decoration-none">
                                            <img class=""
                                                src="{{ asset('assets/images/logout-svgrepo-com.svg') }}" alt="" />
                                            <div class="flex-grow-1 ps-4">
                                                <h2 class="icon-item-title">Logout</h2>
                                                <p class="icon-item-caption" style="margin-bottom: 0">
                                                    Logout from account
                                                </p>
                                            </div>
                                            <svg class="dropdown-icon-arrow d-none" width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.5237 9.41999L10.7887 13.17C10.6687 13.29 10.5187 13.35 10.3687 13.35C10.2187 13.35 10.0687 13.29 9.94871 13.17C9.70871 12.93 9.70871 12.555 9.94871 12.315L12.6637 9.58499H3.90371C3.57371 9.58499 3.30371 9.31499 3.30371 8.98499C3.30371 8.65499 3.57371 8.38499 3.90371 8.38499H12.6637L9.94871 5.655C9.70871 5.415 9.70871 5.04 9.94871 4.8C10.1887 4.56 10.5637 4.56 10.8037 4.8L14.5387 8.54999C14.7637 8.80499 14.7637 9.19499 14.5237 9.41999Z"
                                                    fill="#7F31FF" />
                                            </svg>
                                        </a>
                                    </li> --}}
                        {{-- </ul> --}}

                    </div>
                    <div class="bx bx-menu" id="menu-icon"></div>
                    {{-- Admin --}}
                @else
                    <a href="{{ route('dashboard.index') }}" class="btn-db">
                        <button type="button" class="btn-dashboard">
                            Dashboard
                        </button>
                    </a>
                    <a href="{{ route('dashboard.index') }}" class="nav-db">
                        <span class="nav-dashboard"></span>
                        Dashboard
                    </a>
                    <div class="bx bx-menu" id="menu-icon"></div>
                @endif
                {{-- Belum Login --}}
            @else
                <a href="{{ url('/product') }}" class='bx bx-search' id="search-icon"></a>
                <a class="ri-shopping-cart-2-line" href="/login" id="cart-icon"></a>
                <a href="/login" class='bx bxs-user-account' id="user-account-icon"></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            @endauth
        </div>
    </header>

    <div class="popup-visitor show" id="popup-visitor">
        <div class="overlay-visitor"></div>
        <div class="content d-flex flex-column align-items-center">
            <div class="content-header">
                <div class="close-btn-visitor" id="close-icon-visitor">&times;</div>
                <img src="{{ asset('frontend/images/main-logo.png') }}" class="logo-popup img-fluid mb-4"
                    width="100" />
            </div>
            <p class="popup-desc">Apologies, our website is currently for <b>international purchasers</b> only.
                We regret to inform you that purchases are temporarily restricted for customers from Indonesia. 
                Please click this link below.
            </p>
            <a href="https://linktr.ee/bertjorak" class="btn">Visit
                Our E-Commerce</a>
        </div>
    </div>
    @if (Auth::user())
        @if (Auth::user()->type_addres == null &&
                Auth::user()->id_province == null &&
                Auth::user()->id_city == null &&
                Auth::user()->detail_address == null &&
                Auth::user()->zipcode == null)
            <div class="alert show" role="alert">
                <span class="ri-error-warning-line"></span>
                <span class="msg_alert">You have not entered an address, please fill in the address
                    here <a href="{{ route('dashboard.profile.edit', Auth::user()->id) }}"
                        style="text-decoration: underline; color: blue;">first</a>.</span>
                <span class="ri-close-line" id="close-icon"></span>
            </div>
        @endif
    @endif

    {{-- js link --}}
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
