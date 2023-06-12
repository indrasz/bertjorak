@extends('layouts.front')

@section('title', ' About')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar2')


    <section class="shayna-header position-relative overflow-hidden" style="top: 103.57px;">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Noto+Sans:wght@400;700&display=swap");

            :root {
                --dark-1: #101d2e;
                --dark-2: #0f1c2d;
                --dark-3: #1e2a39;
                --grey-1: #6f7781;
                --grey-2: #626a7f;
                --black: #000000;
                --dull-purple: #7f31ff;
                --strong-purple: #8f00ff;
                --soft-purple: #f9faff;
                --noto-sans: 'Noto Sans', sans-serif;
                --montserrat: 'Montserrat', sans-serif;
                --poppins: 'Poppins', sans-serif;
                ;
            }

            /* START:Header */
            .header-background img {
                z-index: -1;
                width: 100%;
                top: 120px;
                left: 0;
                right: 0;
            }

            .shayna-header main {
                font-family: var(--noto-sans);
                font-size: 16px;
                padding-bottom: 64px;

            }

            .shayna-header .headline {
                font-family: var(--poppins);
                font-size: 48px;
                font-weight: 500;
                line-height: 70px;
                text-align: center;
                color: var(--dark-3);
                width: auto;
            }

            .shayna-header .header-description>p {
                color: var(--black);
                margin-bottom: 0;
                font-size: 20px;
                line-height: 30px;
                text-align: center;
                font-weight: 400;
                padding: 32px 7.5%;
                width: auto;
            }

            .btn-join {
                padding: 20px 32px;
                color: #fff;
                font-weight: 400;
                font-size: 20px;
                background-color: var(--dull-purple);
                border-radius: 50px;
            }

            .btn-join:hover {
                color: var(--soft-purple);
                background-color: var(--strong-purple);
            }

            .statistic-text {
                text-align: center;
                color: var(--grey-2);
                font-size: 16px;
                font-weight: 600;
                margin-top: 200px;
                margin-bottom: 24px;
            }

            .partner-logo {
                font-family: var(--montserrat);
                font-weight: 600;
                font-size: 24px;
                letter-spacing: -2%;
                color: #a5aab0;
            }

            @media (max-width: 765px) {
                .shayna-header .headline {
                    font-size: 40px;
                    line-height: 48px;
                }
            }

            @media (min-width: 768px) {
                .header-background img {
                    top: 375px;
                }
            }

            @media (min-width: 992px) {
                .header-background img {
                    top: 250px;
                }

                .shayna-header .headline {
                    width: 900px;
                }

                .shayna-header .header-description>p {
                    width: 1000px;
                }
            }

            @media (min-width: 1025px) {
                .header-background img {
                    top: 175px;
                }
            }

            html {
                cursor: url('frontend/images/iconmonstr-cursor-31-24.png'), auto;
                height: 100%;
            }




            /* END:Header */
        </style>

        <!-- HEADER BACKGROUND -->
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="mb-4 mt-4">
                <div class="first-image">
                    <style>
                        .first-image {
                            background-image: url('frontend/images/bertjorak-about.png');
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center;
                            width: 100vw;
                            height: 375px;
                            transition: 0.5s ease-in-out;
                        }
                    </style>
                </div>
            </div>
            {{-- <div class="headline">
              Stay Stunning and Positive
            </div> --}}
            <div class="mt-2 mb-2 header-description">
                <p class="text-center">
                    It started in a small city, starting our journey at Bandung on 3 September 2020, we are now already
                    expanding our gorgeous troops all around the country. We’ve reached 20 provinces in Indonesia,
                    including 5 cities with the highest demand; Jakarta, Bandung, Bekasi, Tangerang, and Pekanbaru.
                </p>
            </div>
            <div class="mb-4 mt-4">
                <div class="second_image">
                    <style>
                        .second_image {
                            background-image: url('frontend/images/bertjorak-stay.png');
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center;
                            width: 100vw;
                            height: 375px;
                            transition: 0.5s ease-in-out;
                        }

                        @media screen and (max-width: 1090px) {
                            .second_image {
                                height: 280px;
                                transition: 0.5s ease-in-out;
                            }
                        }

                        @media screen and (max-width: 900px) {
                            .second_image {
                                height: 200px;
                                transition: 0.5s ease-in-out;
                            }
                        }

                        @media screen and (max-width: 700px) {
                            .second_image {
                                height: 150px;
                                transition: 0.5s ease-in-out;
                            }
                        }

                        @media screen and (max-width: 535px) {
                            .first_image {
                                height: 325px;
                                transition: 0.5s ease-in-out;
                            }

                            .second_image {
                                height: 100px;
                                transition: 0.5s ease-in-out;
                            }
                        }
                    </style>
                </div>
            </div>
            <div class="mt-2 mb-2 header-description">
                <p class="text-center">
                    Bertjorak is an everyday fashion brand with bright and pop colors, while also portraying the essence
                    of quirkiness. Inspired by the diversity of Indonesia’s colors of its cultures, we express a variety
                    of philosophies through different splash of eccentric colors with the intention to spread positive
                    energy and youthfulness across all fashion savvy and people in Indonesia.
                </p>
            </div>
        </div>
        {{-- Footer --}}
        @include('includes.Frontend.footer')
    </section>


@endsection
