<section class="h-100 w-100" style="box-sizing: border-box; background-color: #fcfcff">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-5-1 .modal-item.modal {
            top: 2rem;
        }

        .header-5-1 .navbar {
            padding: 3.5rem 2rem 2.5rem;
        }

        .header-5-1 .hero {
            padding: 2.5rem 2rem 5rem;
        }

        .header-5-1 .navbar-light .navbar-nav .nav-link {
            font: 500 16px/1.5rem Poppins, sans-serif;
            color: #1d2b4f;
        }

        .header-5-1 .navbar-light .navbar-nav .nav-link.active {
            color: #7F31FF;
        }

        .header-5-1 .navbar-light .navbar-nav .nav-link:hover {
            font: 500 16px/1.5rem Poppins, sans-serif;
            color: #7F31FF;
        }

        .header-5-1 .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .header-5-1 .modal-content .modal-header,
        .header-5-1 .modal-content .modal-footer,
        .header-5-1 .navbar-light .navbar-toggler {
            border: none;
        }

        .header-5-1 .btn:focus,
        .header-5-1 .btn:active {
            outline: none !important;
        }

        .header-5-1 .btn-fill {
            font: 500 12px/1.5rem Poppins, sans-serif;
            background-color: #7F31FF;
            border-radius: 999px;
            padding: 0.75rem 3rem;
            -webkit-box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
            box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
        }

        .header-5-1 .btn-register {
            font: 500 12px/1.5rem Poppins, sans-serif;
            background-color: #ffffff;
            color: #7F31FF;
            border: 1px solid #7F31FF;
            border-radius: 999px;
            padding: 0.75rem 3rem;
            -webkit-box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
            box-shadow: 0px 20px 40px rgba(132, 51, 170, 0.18);
        }

        .header-5-1 .btn-register:hover {
            color: #FFFFFF;
            background-color: #7F31FF;
            -webkit-box-shadow: 0px 20px 40px rgba(180, 81, 226, 0.18);
            box-shadow: 0px 20px 40px rgba(182, 84, 228, 0.18);
        }

        .header-5-1 .modal-item .modal-dialog .modal-content {
            border-radius: 8px;
        }

        .header-5-1 .responsive li a {
            padding: 1rem;
        }

        .header-5-1 .text-caption {
            font: 500 0.875rem/1.25rem Poppins, sans-serif;
            margin-bottom: 0.25rem;
            color: #52bd95;
        }

        .header-5-1 .left-column {
            margin-bottom: 0;
            width: 100%;
        }

        .header-5-1 .right-column {
            width: 100%;
        }

        .header-5-1 .title-text-big {
            font: 700 2.25rem/2.5rem Poppins, sans-serif;
            margin-bottom: 3rem;
            color: #0e2f3e;
        }

        .header-5-1 .icon-list {
            margin-bottom: 1.5rem;
        }

        .header-5-1 .icon-item {
            margin-bottom: 2rem;
        }

        .header-5-1 .icon-item-title {
            font: 600 0.875rem/1.25rem Poppins, sans-serif;
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: #2a3759;
        }

        .header-5-1 .icon-item-caption {
            font-size: 0.75rem;
            line-height: 1rem;
            margin-bottom: 1rem;
            color: #8283b9;
        }

        .header-5-1 .card-container {
            z-index: 999;
        }

        .header-5-1 .card-item {
            padding: 1rem 1.25rem 1.75rem;
            border-top-left-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
            transition: 0.4s;
            top: 0px;
            left: 0px;
            position: relative;
        }

        .header-5-1 .card-item:hover {
            box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
            top: -3px;
            left: 3px;
            transition: 0.4s;
            position: relative;
        }

        .header-5-1 .card-header-title {
            font: 500 0.875rem/1.25rem Poppins, sans-serif;
            color: #132247;
            margin-bottom: 1px;
        }

        .header-5-1 .card-header-caption {
            font: 500 0.75rem/1rem Poppins, sans-serif;
            color: #a5a6cd;
            margin-bottom: 0;
        }

        .header-5-1 .card-doctor-name {
            font: 500 0.75rem/1rem Poppins, sans-serif;
            margin-bottom: 0.25rem;
            color: #132247;
        }

        .header-5-1 .card-doctor-status {
            font: 500 0.625rem/1rem Poppins, sans-serif;
            color: #a5a6cd;
            margin-bottom: 0;
        }

        .header-5-1 .btn-card-item {
            font: 600 0.75rem/1rem Poppins, sans-serif;
            background-color: #e5fff5;
            color: #52bd95;
            transition: 0.3s;
            padding: 0.625rem 3.5rem;
            border-radius: 0.5rem;
        }

        .header-5-1 .btn-card-item:hover {
            background-color: #52bd95;
            color: #ffffff;
            transition: 0.3s;
        }

        .header-5-1 .navbar .nav-item .dropdown-menu {
            margin-top: 0;
            width: 250px;
            --tw-shadow: 0 0px 20px 0 rgba(167, 167, 167, 0.1),
                0 0px 20px 0 rgba(167, 167, 167, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(167, 167, 167, 0)),
                var(--tw-ring-shadow, 0 0 rgba(167, 167, 167, 0)), var(--tw-shadow);
            border: none;
            border-radius: 0.75rem;
            padding: 1rem;
        }

        .header-5-1 .dropdown-hover {
            height: 100%;
            padding: 0.5rem;
        }

        .header-5-1 .dropdown-hover:hover {
            background-color: #e5fff5;
            border-radius: 0.75rem;
        }

        @media (min-width: 375px) {
            .header-5-1 .navbar .nav-item .dropdown-menu {
                width: 310px;
            }

            .header-5-1 .dropdown-hover:hover .dropdown-icon-arrow {
                display: block !important;
            }
        }

        @media (min-width: 576px) {
            .header-5-1 .modal-item .modal-dialog {
                max-width: 95%;
                border-radius: 12px;
            }

            /* .header-5-1 .navbar {
                padding: 3.5rem 2rem 2.5rem;
            } */

            .header-5-1 .hero {
                padding: 2.5rem 2rem 5rem;
            }

            .header-5-1 .title-text-big {
                font-size: 3rem;
                line-height: 1.2;
            }

            .header-5-1 .icon-list {
                margin-bottom: 1.25rem;
            }

            .header-5-1 .icon-item {
                width: 50%;
                margin-bottom: 2.75rem;
            }

            .header-5-1 .dropdown-hover {
                padding: 1rem;
            }

            .header-5-1 .navbar .nav-item .dropdown-menu {
                padding: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            /* .header-5-1 .navbar {
                padding: 3.5rem 6rem 2.5rem;
            } */

            .header-5-1 .hero {
                padding: 2.5rem 4rem 5rem;
            }

            .header-5-1 .left-column {
                margin-bottom: 3rem;
            }
        }

        @media (min-width: 992px) {

            /* .header-5-1 .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.5rem;
                padding-left: 1.5rem;
            }
        */
            .header-5-1 .navbar-expand-lg .navbar-nav {
                margin-right: 4rem;
            }

            /* .header-5-1 .navbar {
                padding: 3.5rem 6rem 2.5rem;
            } */

            .header-5-1 .hero {
                padding: 2.5rem 6rem 5rem;
            }

            .header-5-1 .left-column {
                width: 50%;
                margin-bottom: 0;
            }

            .header-5-1 .right-column {
                width: 50%;
            }

            .header-5-1 .card-container {
                bottom: 10rem;
                right: 5rem;
                position: absolute !important;
            }

            .header-5-1 .navbar .nav-item:hover .nav-link {
                color: #7F31FF;
            }

            .header-5-1 .navbar .nav-item:hover .dropdown-menu {
                display: block;
            }

            .header-5-1 .dropdown-toggle::after,
            .header-5-1 .navbar .nav-item .dropdown-menu {
                display: none;
            }

            .header-5-1 .dropdown:hover .dropdown-icon-drop {
                display: none !important;
            }

            .header-5-1 .dropdown:hover .dropdown-icon-close {
                display: block !important;
            }
        }

        @media (min-width: 1200px) {
            /* .header-5-1 .navbar {
                padding: 3.5rem 10rem 2.5rem;
            } */

            .header-5-1 .hero {
                padding: 2.5rem 10rem 5rem;
            }
        }

    </style>
    <div class="header-5-1 container  mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="/">
                <img style="margin-right: 0.75rem" src="{{ asset('frontend/images/main-logo.png') }}" alt="main-logo"
                    width="100" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                aria-labelledby="targetModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content bg-white border-0">
                        <div class="modal-header" style="padding: 2rem; padding-bottom: 0">
                            <a class="modal-title" id="targetModalLabel">
                                <img style="margin-top: 0.5rem" src="{{ asset('frontend/images/main-logo.png') }}"
                                    alt="main-logo" width="90" />
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Mobile navbar -->
                        <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                            <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Products</a>
                                    <ul class="dropdown-menu" style="cursor: pointer">

                                        <li>
                                            <a href="#"
                                                class="dropdown-hover d-flex align-items-center justify-content-center text-start text-decoration-none">
                                                <img class=""
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header5/Header-5-5.png"
                                                    alt="" />
                                                <div class="flex-grow-1 ps-4">
                                                    <h2 class="icon-item-title">Our product</h2>
                                                    <p class="icon-item-caption" style="margin-bottom: 0">
                                                        Let's see our product
                                                    </p>
                                                </div>
                                                <svg class="dropdown-icon-arrow d-none" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.5237 9.41999L10.7887 13.17C10.6687 13.29 10.5187 13.35 10.3687 13.35C10.2187 13.35 10.0687 13.29 9.94871 13.17C9.70871 12.93 9.70871 12.555 9.94871 12.315L12.6637 9.58499H3.90371C3.57371 9.58499 3.30371 9.31499 3.30371 8.98499C3.30371 8.65499 3.57371 8.38499 3.90371 8.38499H12.6637L9.94871 5.655C9.70871 5.415 9.70871 5.04 9.94871 4.8C10.1887 4.56 10.5637 4.56 10.8037 4.8L14.5387 8.54999C14.7637 8.80499 14.7637 9.19499 14.5237 9.41999Z"
                                                        fill="#52BD95" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="dropdown-hover d-flex align-items-center justify-content-center text-start text-decoration-none">
                                                <img class=""
                                                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header5/Header-5-6.png"
                                                    alt="" />
                                                <div class="flex-grow-1 ps-4">
                                                    <h2 class="icon-item-title">
                                                        Ask your questions
                                                    </h2>
                                                    <p class="icon-item-caption" style="margin-bottom: 0">
                                                        Ask us about a complaint
                                                    </p>
                                                </div>
                                                <svg class="dropdown-icon-arrow d-none" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.5237 9.41999L10.7887 13.17C10.6687 13.29 10.5187 13.35 10.3687 13.35C10.2187 13.35 10.0687 13.29 9.94871 13.17C9.70871 12.93 9.70871 12.555 9.94871 12.315L12.6637 9.58499H3.90371C3.57371 9.58499 3.30371 9.31499 3.30371 8.98499C3.30371 8.65499 3.57371 8.38499 3.90371 8.38499H12.6637L9.94871 5.655C9.70871 5.415 9.70871 5.04 9.94871 4.8C10.1887 4.56 10.5637 4.56 10.8037 4.8L14.5387 8.54999C14.7637 8.80499 14.7637 9.19499 14.5237 9.41999Z"
                                                        fill="#52BD95" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>

                        <div class="modal-footer me-auto" style="padding: 2rem; padding-top: 0.75rem">

                            @auth
                                {{-- Buyer --}}
                                @if (Auth::user()->hasRole('buyer'))
                                    <a class="nav-link " href="{{ route('dashboard.index') }}"
                                        data-bs-toggle="dropdown">
                                        <img src="{{ asset('frontend/images/icon-user.png') }}" class="me-2"
                                            alt="icon-user" width="45" height="45">
                                        Username
                                    </a>
                                    <a class="nav-link" href="#">
                                        <img src="{{ asset('frontend/images/icon-cart.svg') }}" alt="" />
                                        <div class="cart-badge">3</div>
                                    </a>
                                    {{-- Admin --}}
                                @else
                                    <a href="{{ route('dashboard.index') }}">
                                        <button type="button" class="btn btn-primary">
                                            Dashboard
                                        </button>
                                    </a>
                                @endif
                                {{-- Belum Login --}}
                            @else
                                <a href="/login" class="btn btn-fill text-white me-2">Login</a>
                                <a href="/register" class="btn btn-register">Register</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item me-2">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item me-2 dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            data-bs-toggle="dropdown">Products
                            <svg class="ms-2 d-lg-block dropdown-icon-drop" width="9" height="6" viewBox="0 0 9 6"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 1L4.5 5L1 1" stroke="#1D2B4F" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <svg class="ms-2 d-lg-none dropdown-icon-close" width="9" height="10" viewBox="0 0 9 10"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 1L4.5 5L1 1" stroke="#7F31FF" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M1 9L4.5 5L8 9" stroke="#7F31FF" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu" style="cursor: pointer">

                            <li>
                                <a href="#"
                                    class="dropdown-hover d-flex align-items-center justify-content-center text-start text-decoration-none">
                                    <img class=""
                                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header5/Header-5-5.png"
                                        alt="" />
                                    <div class="flex-grow-1 ps-4">
                                        <h2 class="icon-item-title">Our product</h2>
                                        <p class="icon-item-caption" style="margin-bottom: 0">
                                            Let's see our product
                                        </p>
                                    </div>
                                    <svg class="dropdown-icon-arrow d-none" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.5237 9.41999L10.7887 13.17C10.6687 13.29 10.5187 13.35 10.3687 13.35C10.2187 13.35 10.0687 13.29 9.94871 13.17C9.70871 12.93 9.70871 12.555 9.94871 12.315L12.6637 9.58499H3.90371C3.57371 9.58499 3.30371 9.31499 3.30371 8.98499C3.30371 8.65499 3.57371 8.38499 3.90371 8.38499H12.6637L9.94871 5.655C9.70871 5.415 9.70871 5.04 9.94871 4.8C10.1887 4.56 10.5637 4.56 10.8037 4.8L14.5387 8.54999C14.7637 8.80499 14.7637 9.19499 14.5237 9.41999Z"
                                            fill="#7F31FF" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="dropdown-hover d-flex align-items-center justify-content-center text-start text-decoration-none">
                                    <img class=""
                                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header5/Header-5-6.png"
                                        alt="" />
                                    <div class="flex-grow-1 ps-4">
                                        <h2 class="icon-item-title">Ask your questions</h2>
                                        <p class="icon-item-caption" style="margin-bottom: 0">
                                            Ask us about a complaint
                                        </p>
                                    </div>
                                    <svg class="dropdown-icon-arrow d-none" width="18" height="18" viewBox="0 0 18 18"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.5237 9.41999L10.7887 13.17C10.6687 13.29 10.5187 13.35 10.3687 13.35C10.2187 13.35 10.0687 13.29 9.94871 13.17C9.70871 12.93 9.70871 12.555 9.94871 12.315L12.6637 9.58499H3.90371C3.57371 9.58499 3.30371 9.31499 3.30371 8.98499C3.30371 8.65499 3.57371 8.38499 3.90371 8.38499H12.6637L9.94871 5.655C9.70871 5.415 9.70871 5.04 9.94871 4.8C10.1887 4.56 10.5637 4.56 10.8037 4.8L14.5387 8.54999C14.7637 8.80499 14.7637 9.19499 14.5237 9.41999Z"
                                            fill="#7F31FF" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Reviews</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>

                @auth
                    {{-- Buyer --}}
                    @if (Auth::user()->hasRole('buyer'))
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item me-2 dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                    data-bs-toggle="dropdown">
                                    <img src="{{ asset('frontend/images/icon-user.png') }}" class="me-2"
                                        alt="icon-user" width="45" height="45">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" style="cursor: pointer">

                                    <li>
                                        <a href="{{ route('dashboard.index') }}"
                                            class="dropdown-hover d-flex align-items-center justify-content-center text-start text-decoration-none">
                                            <img class=""
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header5/Header-5-5.png"
                                                alt="" />
                                            <div class="flex-grow-1 ps-4">
                                                <h2 class="icon-item-title">Dashboard</h2>
                                                <p class="icon-item-caption" style="margin-bottom: 0">
                                                    Update your profile
                                                </p>
                                            </div>
                                            <svg class="dropdown-icon-arrow d-none" width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.5237 9.41999L10.7887 13.17C10.6687 13.29 10.5187 13.35 10.3687 13.35C10.2187 13.35 10.0687 13.29 9.94871 13.17C9.70871 12.93 9.70871 12.555 9.94871 12.315L12.6637 9.58499H3.90371C3.57371 9.58499 3.30371 9.31499 3.30371 8.98499C3.30371 8.65499 3.57371 8.38499 3.90371 8.38499H12.6637L9.94871 5.655C9.70871 5.415 9.70871 5.04 9.94871 4.8C10.1887 4.56 10.5637 4.56 10.8037 4.8L14.5387 8.54999C14.7637 8.80499 14.7637 9.19499 14.5237 9.41999Z"
                                                    fill="#7F31FF" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a class="nav-link" href="{{ route('cart.index') }}">
                            <img src="{{ asset('frontend/images/icon-cart.svg') }}" alt="" />
                            <livewire:cart.count-cart />
                            {{-- <div class="cart-badge">3</div> --}}
                        </a>
                        {{-- Admin --}}
                    @else
                        <a href="{{ route('dashboard.index') }}">
                            <button type="button" class="btn btn-primary">
                                Dashboard
                            </button>
                        </a>
                    @endif
                    {{-- Belum Login --}}
                @else
                    <a href="/login" class="btn btn-fill text-white me-2">Login</a>
                    <a href="/register" class="btn btn-register">Register</a>
                @endauth
            </div>
        </nav>
    </div>
</section>
