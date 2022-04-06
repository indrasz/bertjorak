@extends('layouts.front')

@section('title', ' Detail')

@section('content')

<section class="bertjorak-navbar container-xxl font-noto-sans">
    <nav class="bg-white navbar navbar-expand-lg navbar-light">
        <div class="container-fluid get-shayna-container">
            <a class="navbar-brand" href="#">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Talent-2/logo.svg"
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
                    <div class="mt-3 flex-lg-row flex-column d-flex mt-lg-0 navbar-buttons">
                        <a href="#" class="nav-link d-inline-block">
                            <img src="{{ asset('frontend/images/icon-user.png') }}" alt="icon-user" width="45" height="45">
                            Holaa, Everyone
                        </a>
                        <a class="nav-link d-inline-block mt-2" href="#">
                            <img src="{{ asset('frontend/images/icon-cart-filled.svg') }}" alt="" />
                            <div class="cart-badge">3</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>

<section class="w-100 h-100 breadcrumb-section mt-4">
    <div class="container-xxl font-noto-sans">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ms-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>
</section>

<section class="w-100 h-100 detail-product">
    <div class="container mt-4 pb-5">
        <div class="row">
            <div class="col-12 col-lg-8 " >
                <div class="card-product p-4">
                    <img src="{{ asset('frontend/images/detail-photo1.jpg') }}" class="w-100" alt="">
                    <div class="carousel pt-2"
                        data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": true, "pageDots" : false}'>
                        <img src="{{ asset('frontend/images/detail-photo1.jpg') }}" class="w-25 img-thumbnail" alt="">
                        <img src="{{ asset('frontend/images/detail-photo2.jpg') }}" class="w-25 img-thumbnail" alt="">
                        <img src="{{ asset('frontend/images/detail-photo3.jpg') }}" class="w-25 img-thumbnail" alt="">
                        <img src="{{ asset('frontend/images/detail-photo4.jpg') }}" class="w-25 img-thumbnail" alt="">
                        <img src="{{ asset('frontend/images/detail-photo5.jpg') }}" class="w-25 img-thumbnail" alt="">
                        <img src="{{ asset('frontend/images/detail-photo6.jpg') }}" class="w-25 img-thumbnail" alt="">
                        <img src="{{ asset('frontend/images/detail-photo4.jpg') }}" class="w-25 img-thumbnail" alt="">
                        <img src="{{ asset('frontend/images/detail-photo5.jpg') }}" class="w-25 img-thumbnail" alt="">
                        <img src="{{ asset('frontend/images/detail-photo6.jpg') }}" class="w-25 img-thumbnail" alt="">
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-4 ">
                <div class="card-detail-product py-4 px-4 mt-4">
                    <div class="product-name ms-2 ps-2 mt-3">
                        Product name
                    </div>

                    <div class="price-product mt-lg-2 ms-2 ps-2 ">200K</div>

                    <div class="stock-product mt-lg-2 ms-2 ps-2 ">Stok : 30</div>

                    <div class="desc-product mt-3 px-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book.
                    </div>

                    <div class="chose-size mt-3 px-3">
                        Pilih Ukuran :
                    </div>

                    <div class="d-flex flex-row mt-3 px-3">
                        <label class="me-3 " for="topup1">
                            <input class="d-none b" type="radio" id="topup1" name="topup" value="topup1">
                            <div class="detail-size-card justify-content-center">
                                <div class="text-size m-0">S</div>
                            </div>
                        </label>

                        <label class="me-3" for="topup2">
                            <input class="d-none" type="radio" id="topup2" name="topup" value="topup2">
                            <div class="detail-size-card justify-content-center">
                                <div class="text-size m-0">M</div>
                            </div>
                        </label>

                        <label class="me-3" for="topup3">
                            <input class="d-none" type="radio" id="topup3" name="topup" value="topup3">
                            <div class="detail-size-card justify-content-center">
                                <div class="text-size m-0">L</div>
                            </div>
                        </label>
                    </div>



                    <div class="btn btn-add-cart d-inline-block w-100 p-2 mt-4">
                        Add to cart
                    </div>
                </div>
            </div>

            <style>
                .detail-product .card-detail-product {
                    box-shadow: 0px 4px 40px rgba(172, 172, 172, 0.15);
                    border-radius: 15px;
                    background-color: #ffffff;
                }

                .detail-product .card-detail-product .product-name{
                    font: 600 1.50rem/1.90rem "Poppins", sans-serif;
                }

                .detail-product .card-detail-product .desc-product{
                    color: #ADB2B8;
                }

                .detail-product .card-detail-product .price-product{
                    font: 500 1.25rem/1.90rem "Poppins", sans-serif;
                    color: #121213;
                }

                .detail-product .card-detail-product .stock-product{
                    font: 400 1rem/1.90rem "Poppins", sans-serif;
                }

                .detail-product .card-detail-product .btn-add-cart{
                    background-color: var(--dull-purple);
                    color: #fff;
                    font: 600 1rem/1.90rem "Poppins", sans-serif;
                }
                .detail-product input[type="radio"]:checked+.detail-size-card{
                    border: 2px solid var(--dull-purple);
                    color: var(--dull-purple);
                    width: 50px;
                    text-align: center;
                    background-color: rgba(0, 186, 255, 0.05);
                }

                .detail-product .detail-size-card {
                    border: 2px solid #000000;
                    border-radius: 6px;
                    width: 50px;
                    text-align: center;
                    font-size: 17px;
                }

                /* .detail-product .detail-size-card #icon-check{
                    transition: all 0.1s linear;
                    opacity: 0;
                }

                .detail-product input[type="radio"]:checked+.detail-size-card #icon-check{
                    opacity: 1;
                } */

            </style>
        </div>
    </div>
</section>

<section class="related-product w-100 h-100">
    <div class="container px-4">
        <div class="caption-related-product ps-3">
            Explore Our Product
        </div>
        <div class="carousel pt-2"
            data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "prevNextButtons": false, "draggable": true, "pageDots" : false}'>

            <div class="card-related-carousel">
                <div class="image-placeholder">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                        alt="images" />
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

            <div class="card-related-carousel">
                <div class="image-placeholder">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                        alt="images" />
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

            <div class="card-related-carousel">
                <div class="image-placeholder">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                        alt="images" />
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

            <div class="card-related-carousel">
                <div class="image-placeholder">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                        alt="images" />
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

            <div class="card-related-carousel">
                <div class="image-placeholder">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                        alt="images" />
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

    <style>
        .related-product .caption-related-product{
            font: 600 1.50rem/1.90rem "Poppins", sans-serif;
        }
        .related-product .card-related-carousel {
            width: 325px;
            padding: 28px 28px 40px;
            border-radius: 28px;
            background: white;
            -webkit-box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
            box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
        }

        @media only screen and (max-width: 768px) {
            .related-product .card-related-carousel {
                margin-right: 20px;
            }
        }

        .related-product .card-related-carousel .image-placeholder {
            width: 268px;
            height: 190px;
        }

        .related-product .card-related-carousel .image-placeholder img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 16px;
        }

        .related-product .card-related-carousel .card-details {
            height: 70px;
        }

        .related-product .card-related-carousel .card-details .caption {
            font-weight: 700;
            font-size: 24px;
            color: #080E09;
            margin-top: 24px;
        }

        .related-product .card-related-carousel .card-details .sub-caption {
            font-weight: 400;
            color: #ADB2B8;
        }

        .related-product .card-related-carousel .bottom-text .price-content {
            color: #080E09;
            font-size: 16px;
        }

        .related-product .card-related-carousel .bottom-text .price-content span {
            font-weight: 400;
        }

        .related-product .card-related-carousel .bottom-text .price-content span.price {
            font-weight: 700;
        }

        .related-product .card-related-carousel .bottom-text .rating {
            font-weight: 700;
            font-size: 16px;
            color: #FF9900;
        }

        .related-product .card-related-carousel .bottom-text .rating img {
            margin-top: -1px;
            margin-right: 5px;
        }
    </style>
</section>

<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <footer class="footer-3-2 h-100" style="font-family: 'Poppins', sans-serif">
        <div class="container-xxl mx-auto main">
            <div class="d-flex flex-lg-row flex-column" style="margin-bottom: 5rem">
                <div class="left-col">
                    <svg width="119" height="30" viewBox="0 0 119 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.3218 18.6941L8.00947 21.0063C7.24412 21.7624 6.21064 22.1851 5.13473 22.1819C4.05882 22.1787 3.02789 21.7499 2.26709 20.9891C1.5063 20.2283 1.07745 19.1974 1.07421 18.1214C1.07096 17.0455 1.49358 16.012 2.24976 15.2467L5.70349 11.7929C5.7017 11.7321 5.70047 11.6711 5.70047 11.61C5.70014 11.0957 5.76616 10.5834 5.89693 10.086L1.49342 14.4895C0.534593 15.4552 -0.00242193 16.7615 8.21199e-06 18.1224C0.00243836 19.4832 0.544115 20.7876 1.50638 21.7499C2.46865 22.7121 3.77307 23.2538 5.13392 23.2561C6.49476 23.2586 7.80109 22.7216 8.76676 21.7627L11.079 19.4505L10.3218 18.6941Z"
                            fill="#9D3AFF" />
                        <path
                            d="M18.1625 23.2671C17.4871 23.2683 16.8182 23.136 16.1942 22.8778C15.5701 22.6197 15.0031 22.2408 14.5259 21.7629L8.00949 15.2465C7.04722 14.2815 6.50728 12.9741 6.50824 11.6113C6.5092 10.2486 7.051 8.94189 8.01464 7.97829C8.97828 7.01469 10.2849 6.47294 11.6478 6.47203C13.0105 6.47112 14.3179 7.01111 15.2828 7.97342L21.7993 14.4899C22.5189 15.2088 23.009 16.125 23.2076 17.1227C23.4064 18.1203 23.3045 19.1545 22.9152 20.0942C22.5257 21.034 21.8664 21.837 21.0203 22.4019C20.1743 22.9667 19.1798 23.2678 18.1626 23.2671H18.1625ZM15.2828 21.0063C16.0485 21.761 17.0815 22.1822 18.1565 22.1783C19.2315 22.1745 20.2614 21.7456 21.0217 20.9854C21.7818 20.2253 22.2106 19.1954 22.2145 18.1204C22.2184 17.0453 21.7971 16.0123 21.0424 15.2467L14.526 8.73024C14.1488 8.34754 13.6996 8.04326 13.2043 7.83494C12.709 7.62661 12.1774 7.51836 11.6401 7.51641C11.1027 7.51446 10.5703 7.61885 10.0736 7.82358C9.5768 8.0283 9.12538 8.32932 8.74543 8.70927C8.36548 9.08922 8.06446 9.5406 7.85974 10.0374C7.65501 10.5342 7.55062 11.0666 7.55257 11.6039C7.55452 12.1413 7.66277 12.6729 7.8711 13.1682C8.07942 13.6635 8.3837 14.1127 8.7664 14.4899L15.2828 21.0063Z"
                            fill="#9D3AFF" />
                        <path
                            d="M21.0424 7.97341L18.7302 10.2856L19.487 11.0424L21.7992 8.73023C22.5649 7.97559 23.5978 7.55429 24.6729 7.55818C25.7479 7.56209 26.7778 7.99087 27.538 8.75105C28.2982 9.51122 28.727 10.5411 28.7308 11.6162C28.7347 12.6912 28.3135 13.7242 27.5588 14.4898L24.1024 17.9462C24.1199 18.5225 24.054 19.0982 23.9067 19.6556L28.3156 15.2467C29.2802 14.2822 29.822 12.974 29.822 11.61C29.822 10.246 29.2802 8.93791 28.3156 7.97341C27.3511 7.00892 26.043 6.46707 24.679 6.46707C23.315 6.46707 22.0069 7.00892 21.0424 7.97341Z"
                            fill="#9D3AFF" />
                        <path
                            d="M48.992 21H46.256L41.68 14.056V21H38.944V9.688H41.68L46.256 16.696V9.688H48.992V21ZM59.8615 16.296C59.8615 16.52 59.8348 16.7653 59.7815 17.032H53.5895C53.6215 17.704 53.7922 18.1893 54.1015 18.488C54.4108 18.776 54.8055 18.92 55.2855 18.92C55.6908 18.92 56.0268 18.8187 56.2935 18.616C56.5602 18.4133 56.7362 18.152 56.8215 17.832H59.7175C59.6002 18.4613 59.3442 19.0267 58.9495 19.528C58.5548 20.0187 58.0535 20.408 57.4455 20.696C56.8375 20.9733 56.1602 21.112 55.4135 21.112C54.5388 21.112 53.7602 20.9307 53.0775 20.568C52.4055 20.1947 51.8775 19.6613 51.4935 18.968C51.1095 18.2747 50.9175 17.464 50.9175 16.536C50.9175 15.5973 51.1042 14.7867 51.4775 14.104C51.8615 13.4107 52.3948 12.8827 53.0775 12.52C53.7602 12.1467 54.5388 11.96 55.4135 11.96C56.2988 11.96 57.0775 12.1413 57.7495 12.504C58.4215 12.8667 58.9388 13.3787 59.3015 14.04C59.6748 14.6907 59.8615 15.4427 59.8615 16.296ZM57.0935 15.88C57.1042 15.2933 56.9442 14.856 56.6135 14.568C56.2935 14.2693 55.8935 14.12 55.4135 14.12C54.9122 14.12 54.4962 14.2693 54.1655 14.568C53.8348 14.8667 53.6482 15.304 53.6055 15.88H57.0935ZM65.9638 11.96C66.8491 11.96 67.6384 12.1467 68.3318 12.52C69.0358 12.8827 69.5851 13.4107 69.9798 14.104C70.3851 14.7973 70.5878 15.608 70.5878 16.536C70.5878 17.464 70.3851 18.2747 69.9798 18.968C69.5851 19.6613 69.0358 20.1947 68.3318 20.568C67.6384 20.9307 66.8491 21.112 65.9638 21.112C65.0784 21.112 64.2838 20.9307 63.5798 20.568C62.8758 20.1947 62.3211 19.6613 61.9158 18.968C61.5211 18.2747 61.3238 17.464 61.3238 16.536C61.3238 15.608 61.5211 14.7973 61.9158 14.104C62.3211 13.4107 62.8758 12.8827 63.5798 12.52C64.2838 12.1467 65.0784 11.96 65.9638 11.96ZM65.9638 14.328C65.4411 14.328 64.9984 14.52 64.6358 14.904C64.2838 15.2773 64.1078 15.8213 64.1078 16.536C64.1078 17.2507 64.2838 17.7947 64.6358 18.168C64.9984 18.5413 65.4411 18.728 65.9638 18.728C66.4864 18.728 66.9238 18.5413 67.2758 18.168C67.6278 17.7947 67.8038 17.2507 67.8038 16.536C67.8038 15.8213 67.6278 15.2773 67.2758 14.904C66.9238 14.52 66.4864 14.328 65.9638 14.328ZM77.6745 9.576C79.1145 9.576 80.3038 9.95467 81.2425 10.712C82.1918 11.4693 82.8052 12.4933 83.0825 13.784H80.1865C79.9732 13.2613 79.6425 12.8507 79.1945 12.552C78.7572 12.2533 78.2345 12.104 77.6265 12.104C76.8265 12.104 76.1812 12.3973 75.6905 12.984C75.1998 13.5707 74.9545 14.3547 74.9545 15.336C74.9545 16.3173 75.1998 17.1013 75.6905 17.688C76.1812 18.264 76.8265 18.552 77.6265 18.552C78.2345 18.552 78.7572 18.4027 79.1945 18.104C79.6425 17.8053 79.9732 17.4 80.1865 16.888H83.0825C82.8052 18.168 82.1918 19.192 81.2425 19.96C80.3038 20.7173 79.1145 21.096 77.6745 21.096C76.5758 21.096 75.6105 20.856 74.7785 20.376C73.9465 19.8853 73.3012 19.2027 72.8425 18.328C72.3945 17.4533 72.1705 16.456 72.1705 15.336C72.1705 14.216 72.3945 13.2187 72.8425 12.344C73.3012 11.4693 73.9465 10.792 74.7785 10.312C75.6105 9.82133 76.5758 9.576 77.6745 9.576ZM87.8519 9.16V21H85.1159V9.16H87.8519ZM93.6329 11.96C94.3155 11.96 94.9022 12.1147 95.3929 12.424C95.8835 12.7333 96.2462 13.1547 96.4809 13.688V12.072H99.2009V21H96.4809V19.384C96.2462 19.9173 95.8835 20.3387 95.3929 20.648C94.9022 20.9573 94.3155 21.112 93.6329 21.112C92.8969 21.112 92.2355 20.9307 91.6489 20.568C91.0729 20.1947 90.6142 19.6613 90.2729 18.968C89.9422 18.2747 89.7769 17.464 89.7769 16.536C89.7769 15.5973 89.9422 14.7867 90.2729 14.104C90.6142 13.4107 91.0729 12.8827 91.6489 12.52C92.2355 12.1467 92.8969 11.96 93.6329 11.96ZM94.5129 14.36C93.9262 14.36 93.4515 14.552 93.0889 14.936C92.7369 15.32 92.5609 15.8533 92.5609 16.536C92.5609 17.2187 92.7369 17.752 93.0889 18.136C93.4515 18.52 93.9262 18.712 94.5129 18.712C95.0889 18.712 95.5582 18.5147 95.9209 18.12C96.2942 17.7253 96.4809 17.1973 96.4809 16.536C96.4809 15.864 96.2942 15.336 95.9209 14.952C95.5582 14.5573 95.0889 14.36 94.5129 14.36ZM104.833 11.96C105.963 11.96 106.865 12.2427 107.537 12.808C108.219 13.3733 108.646 14.12 108.817 15.048H106.257C106.182 14.6853 106.011 14.4027 105.745 14.2C105.489 13.9867 105.163 13.88 104.769 13.88C104.459 13.88 104.225 13.9493 104.065 14.088C103.905 14.216 103.825 14.4027 103.825 14.648C103.825 14.9253 103.969 15.1333 104.257 15.272C104.555 15.4107 105.019 15.5493 105.649 15.688C106.331 15.848 106.891 16.0133 107.329 16.184C107.766 16.344 108.145 16.6107 108.465 16.984C108.785 17.3573 108.945 17.8587 108.945 18.488C108.945 19 108.806 19.4533 108.529 19.848C108.251 20.2427 107.851 20.552 107.329 20.776C106.806 21 106.187 21.112 105.473 21.112C104.267 21.112 103.302 20.8453 102.577 20.312C101.851 19.7787 101.409 19.016 101.249 18.024H103.889C103.931 18.408 104.091 18.7013 104.369 18.904C104.657 19.1067 105.025 19.208 105.473 19.208C105.782 19.208 106.017 19.1387 106.177 19C106.337 18.8507 106.417 18.6587 106.417 18.424C106.417 18.1147 106.267 17.896 105.969 17.768C105.681 17.6293 105.206 17.4853 104.545 17.336C103.883 17.1973 103.339 17.048 102.913 16.888C102.486 16.728 102.118 16.472 101.809 16.12C101.499 15.7573 101.345 15.2667 101.345 14.648C101.345 13.848 101.649 13.2027 102.257 12.712C102.865 12.2107 103.723 11.96 104.833 11.96ZM114.208 11.96C115.338 11.96 116.24 12.2427 116.912 12.808C117.594 13.3733 118.021 14.12 118.192 15.048H115.632C115.557 14.6853 115.386 14.4027 115.12 14.2C114.864 13.9867 114.538 13.88 114.144 13.88C113.834 13.88 113.6 13.9493 113.44 14.088C113.28 14.216 113.2 14.4027 113.2 14.648C113.2 14.9253 113.344 15.1333 113.632 15.272C113.93 15.4107 114.394 15.5493 115.024 15.688C115.706 15.848 116.266 16.0133 116.704 16.184C117.141 16.344 117.52 16.6107 117.84 16.984C118.16 17.3573 118.32 17.8587 118.32 18.488C118.32 19 118.181 19.4533 117.904 19.848C117.626 20.2427 117.226 20.552 116.704 20.776C116.181 21 115.562 21.112 114.848 21.112C113.642 21.112 112.677 20.8453 111.952 20.312C111.226 19.7787 110.784 19.016 110.624 18.024H113.264C113.306 18.408 113.466 18.7013 113.744 18.904C114.032 19.1067 114.4 19.208 114.848 19.208C115.157 19.208 115.392 19.1387 115.552 19C115.712 18.8507 115.792 18.6587 115.792 18.424C115.792 18.1147 115.642 17.896 115.344 17.768C115.056 17.6293 114.581 17.4853 113.92 17.336C113.258 17.1973 112.714 17.048 112.288 16.888C111.861 16.728 111.493 16.472 111.184 16.12C110.874 15.7573 110.72 15.2667 110.72 14.648C110.72 13.848 111.024 13.2027 111.632 12.712C112.24 12.2107 113.098 11.96 114.208 11.96Z"
                            fill="#9D3AFF" />
                    </svg>
                    <h5 class="caption-font">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br class="d-sm-block d-none" />
                        Viverra fermentum euismod erat vitae nunc phasellus.<br />
                        Dui duis tortor, mattis phasellus ullamcorper etiam leo.
                    </h5>
                </div>
                <div class="right-col">
                    <div class="d-flex row gap-lg-0 gap-4">
                        <div class="col-lg-4">
                            <h5 class="title-font">Plans</h5>
                            <nav class="list-unstyled list-footer d-grid gap-2">
                                <li>
                                    <a href="#" class="text-decoration-none">Student Solution</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">Teacher Solution</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">Pricing</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">Working NeoClass</a>
                                </li>
                            </nav>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="title-font">About Us</h5>
                            <nav class="list-unstyled list-footer d-grid gap-2">
                                <li>
                                    <a href="#" class="text-decoration-none">Blog</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">Careers</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">Teams</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">Affiliate</a>
                                </li>
                            </nav>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="title-font">Support</h5>
                            <nav class="list-unstyled list-footer d-grid gap-2">
                                <li>
                                    <a href="#" class="text-decoration-none">Contact Support</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">FAQ</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">Site Feedback</a>
                                </li>
                                <li>
                                    <a href="#" class="text-decoration-none">Expert Help</a>
                                </li>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto">
                <div
                    class="container-xxl p-0 mx-auto d-flex flex-column-reverse flex-lg-row justify-content-between align-items-center gap-lg-0 gap-3">
                    <nav class="text-lg-start text-center credit-font">
                        <p>© 2021 with 🔥 NeoClass. All rights reserved.</p>
                    </nav>
                    <div class="d-flex footer-icon align-items-center mb-2 mb-md-0 gap-4">
                        <a href="">
                            <svg class="icon-fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.0583 1.66667H2.94167C2.78299 1.66446 2.62543 1.69354 2.47798 1.75224C2.33053 1.81093 2.19609 1.8981 2.08234 2.00876C1.96858 2.11942 1.87774 2.2514 1.815 2.39717C1.75226 2.54295 1.71885 2.69965 1.71667 2.85833V17.1417C1.71885 17.3004 1.75226 17.4571 1.815 17.6028C1.87774 17.7486 1.96858 17.8806 2.08234 17.9912C2.19609 18.1019 2.33053 18.1891 2.47798 18.2478C2.62543 18.3065 2.78299 18.3355 2.94167 18.3333H17.0583C17.217 18.3355 17.3746 18.3065 17.522 18.2478C17.6695 18.1891 17.8039 18.1019 17.9177 17.9912C18.0314 17.8806 18.1223 17.7486 18.185 17.6028C18.2478 17.4571 18.2812 17.3004 18.2833 17.1417V2.85833C18.2812 2.69965 18.2478 2.54295 18.185 2.39717C18.1223 2.2514 18.0314 2.11942 17.9177 2.00876C17.8039 1.8981 17.6695 1.81093 17.522 1.75224C17.3746 1.69354 17.217 1.66446 17.0583 1.66667ZM6.74167 15.6167H4.24167V8.11667H6.74167V15.6167ZM5.49167 7.06667C5.14689 7.06667 4.81623 6.9297 4.57244 6.6859C4.32864 6.44211 4.19167 6.11145 4.19167 5.76667C4.19167 5.42189 4.32864 5.09122 4.57244 4.84743C4.81623 4.60363 5.14689 4.46667 5.49167 4.46667C5.67475 4.4459 5.86015 4.46404 6.03574 4.5199C6.21132 4.57576 6.37312 4.66807 6.51056 4.7908C6.64799 4.91353 6.75795 5.0639 6.83323 5.23207C6.90852 5.40024 6.94744 5.58241 6.94744 5.76667C6.94744 5.95092 6.90852 6.13309 6.83323 6.30126C6.75795 6.46943 6.64799 6.61981 6.51056 6.74253C6.37312 6.86526 6.21132 6.95757 6.03574 7.01343C5.86015 7.06929 5.67475 7.08743 5.49167 7.06667ZM15.7583 15.6167H13.2583V11.5917C13.2583 10.5833 12.9 9.925 11.9917 9.925C11.7106 9.92706 11.4368 10.0152 11.2074 10.1776C10.9779 10.3401 10.8037 10.5689 10.7083 10.8333C10.6431 11.0292 10.6149 11.2355 10.625 11.4417V15.6083H8.12501C8.12501 15.6083 8.12501 8.79167 8.12501 8.10833H10.625V9.16667C10.8521 8.77259 11.1824 8.44793 11.5804 8.22767C11.9783 8.0074 12.4288 7.89988 12.8833 7.91667C14.55 7.91667 15.7583 8.99167 15.7583 11.3V15.6167Z"
                                    fill="#121212" />
                            </svg>
                        </a>
                        <a href="">
                            <svg class="icon-fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.4167 1.66667H2.58332C2.34021 1.66667 2.10705 1.76325 1.93514 1.93516C1.76323 2.10707 1.66666 2.34022 1.66666 2.58334V17.4167C1.66666 17.5371 1.69037 17.6562 1.73643 17.7675C1.7825 17.8787 1.85002 17.9797 1.93514 18.0649C2.02026 18.15 2.12131 18.2175 2.23253 18.2636C2.34375 18.3096 2.46294 18.3333 2.58332 18.3333H10.5667V11.875H8.39999V9.37501H10.5667V7.50001C10.5218 7.0598 10.5737 6.61511 10.7189 6.19712C10.8641 5.77913 11.099 5.39796 11.407 5.08035C11.7151 4.76274 12.089 4.51637 12.5023 4.35854C12.9157 4.2007 13.3586 4.13522 13.8 4.16667C14.4486 4.16268 15.0969 4.19607 15.7417 4.26667V6.51667H14.4167C13.3667 6.51667 13.1667 7.01667 13.1667 7.74167V9.35001H15.6667L15.3417 11.85H13.1667V18.3333H17.4167C17.537 18.3333 17.6562 18.3096 17.7675 18.2636C17.8787 18.2175 17.9797 18.15 18.0648 18.0649C18.15 17.9797 18.2175 17.8787 18.2635 17.7675C18.3096 17.6562 18.3333 17.5371 18.3333 17.4167V2.58334C18.3333 2.46296 18.3096 2.34376 18.2635 2.23255C18.2175 2.12133 18.15 2.02028 18.0648 1.93516C17.9797 1.85004 17.8787 1.78252 17.7675 1.73645C17.6562 1.69038 17.537 1.66667 17.4167 1.66667Z"
                                    fill="#121212" />
                            </svg>
                        </a>
                        <a href="">
                            <svg class="icon-stroke" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0-footer-3-2)">
                                    <path
                                        d="M19.1667 2.5C18.3686 3.0629 17.4851 3.49343 16.55 3.775C16.0481 3.19793 15.3811 2.78891 14.6392 2.60327C13.8973 2.41764 13.1162 2.46433 12.4017 2.73705C11.6872 3.00976 11.0737 3.49534 10.6441 4.1281C10.2146 4.76086 9.98974 5.51028 9.99999 6.275V7.10834C8.53552 7.14631 7.08439 6.82151 5.77584 6.16287C4.46728 5.50424 3.34193 4.5322 2.49999 3.33334C2.49999 3.33334 -0.833338 10.8333 6.66666 14.1667C4.95043 15.3316 2.90596 15.9158 0.833328 15.8333C8.33333 20 17.5 15.8333 17.5 6.25C17.4992 6.01788 17.4769 5.78633 17.4333 5.55834C18.2838 4.71958 18.884 3.6606 19.1667 2.5V2.5Z"
                                        stroke="#121212" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0-footer-3-2">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="">
                            <svg class="icon-stroke" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1667 1.66667H5.83334C3.53215 1.66667 1.66667 3.53215 1.66667 5.83334V14.1667C1.66667 16.4679 3.53215 18.3333 5.83334 18.3333H14.1667C16.4679 18.3333 18.3333 16.4679 18.3333 14.1667V5.83334C18.3333 3.53215 16.4679 1.66667 14.1667 1.66667Z"
                                    stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M13.3333 9.47501C13.4362 10.1685 13.3177 10.8769 12.9948 11.4992C12.6719 12.1215 12.161 12.6262 11.5347 12.9414C10.9084 13.2566 10.1987 13.3663 9.50648 13.2549C8.81427 13.1436 8.1748 12.8167 7.67903 12.321C7.18326 11.8252 6.85644 11.1857 6.74505 10.4935C6.63366 9.8013 6.74338 9.09159 7.0586 8.46532C7.37382 7.83905 7.87848 7.32812 8.50082 7.00521C9.12315 6.68229 9.83146 6.56383 10.525 6.66667C11.2324 6.77158 11.8874 7.10123 12.3931 7.60693C12.8988 8.11263 13.2284 8.76757 13.3333 9.47501Z"
                                    stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.5833 5.41667H14.5917" stroke="#121212" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
@endsection
