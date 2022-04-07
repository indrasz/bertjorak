<section class="bertjorak-navbar container-xxl font-noto-sans">
    <nav class="bg-white navbar navbar-expand-lg navbar-light">
        <div class="container-fluid get-shayna-container">
            <a class="navbar-brand" href="#">
                <img src="{{ url('https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Talent-2/logo.svg') }}"
                    alt="GetShayna" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class=" flex-lg-row flex-column d-flex w-100 align-items-lg-center align-items-baseline">
                    <div class="mx-lg-auto navbar-nav">
                        <a class="nav-link mx-lg-3 active" aria-current="page" href="#">
                            Home
                        </a>
                        <a class="nav-link mx-lg-3" href="#">Hire Talent</a>
                        <a class="nav-link mx-lg-3" href="#">About Us</a>
                        <span class="nav-item dropdown">
                            <a class="nav-link mx-lg-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Contact
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </span>
                    </div>
                    @auth
                        @if (Auth::user()->level == 0)
                            <div class="mt-3 flex-lg-row flex-column d-flex mt-lg-0 navbar-buttons">
                                <a href="#" class="nav-link d-inline-block">
                                    <img src="{{ asset('frontend/images/icon-user.png') }}" alt="icon-user" width="45"
                                        height="45">
                                    Holaa, Everyone
                                </a>
                                <a class="nav-link d-inline-block mt-2" href="#">
                                    <img src="{{ asset('frontend/images/icon-cart-filled.svg') }}" alt="" />
                                    <div class="cart-badge">3</div>
                                </a>
                            </div>
                        @endif
                    @else
                        <div class="mt-3 flex-lg-row flex-column d-flex mt-lg-0 navbar-buttons">
                            <a href="/login" class="btn btn-login mx-3">Login</a>
                            <a href="/register" class="btn btn-register mx-3">Register</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</section>
