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
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/product') }}" class="nav-link">
                    Product
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/about') }}" class="nav-link">
                    About
                </a>
            </li>
        </ul>

        <div class="right-nav-item">
            @auth
                {{-- Buyer --}}
                @if (Auth::user()->hasRole('buyer'))
                    <a class="nav-link" href="">
                        <div class="d-flex">
                            <img src="{{ asset('frontend/images/icon-search.svg') }}" alt="search-icon" id="search-icon" />
                        </div>
                    </a>

                    <a class="nav-link" href="{{ route('cart.index') }}">
                        <div class="d-flex">
                            <img src="{{ asset('frontend/images/icon-cart.svg') }}" alt="cart-icon" />
                            <livewire:cart.count-cart />
                        </div>
                        {{-- <div class="cart-badge">3</div> --}}
                    </a>

                    <div class="navbar-nav ms-auto mt-lg-0">
                        <a class="nav-link d-flex align-items-center" href="{{ route('dashboard.index') }}">
                            @php
                                $convertImg = json_decode(Auth::user()->avatar);
                            @endphp

                            @if ($convertImg == null)
                                <img src="{{ asset('assets/images/blank-profile-picture.png') }}" class="me-2"
                                    alt="icon-user" width="45" height="45" style="border-radius: 50%;">
                            @elseif ($convertImg != null)
                                <img src="{{ asset('/storage/account/' . Auth::user()->id . '/avatar/' . $convertImg) }}"
                                    class="me-2" alt="icon-user" width="45" height="45"
                                    style="border-radius: 50%;">
                            @endif
                            {{ Auth::user()->name }}
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
                    <a href="{{ route('dashboard.index') }}">
                        <button type="button" class="btn-dashboard">
                            Dashboard
                        </button>
                    </a>
                    <div class="bx bx-menu" id="menu-icon"></div>
                @endif
                {{-- Belum Login --}}
            @else
                <a href="/login" class='bx bxs-user-account' id="user-account-icon"></a>
                <a href="/login" class="btn-login">Login</a>
                <a href="/register" class="btn-register">Register</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            @endauth
        </div>
    </header>
    {{-- js link --}}
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>

</body>



</html>




{{-- <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container mx-auto px-4 py-2 position-relative" >
        <a href="/">
            <img style="margin-right: 0.75rem" src="{{ asset('frontend/images/main-logo.png') }}" alt="main-logo"
                width="100" />
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 150px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav> --}}


{{-- make navbar color}}

{{-- <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container mx-auto px-4 py-2 position-relative">
        <a href="/">
            <img style="margin-right: 0.75rem" src="{{ asset('frontend/images/main-logo.png') }}" alt="main-logo"
                width="100" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> --}}
