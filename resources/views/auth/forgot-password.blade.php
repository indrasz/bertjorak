@extends('layouts.front')

@section('title', ' Forgot Password')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar2')

    <section class="body">
        <style>
            .body::before {
                content: "";
                background-image: url('./frontend/images/background.png');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;
                position: absolute;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                opacity: 0.3;
            }
        </style>
        <main>
            <div class="box">
                <div class="inner-box">
                    <div class="forms-wrap">
                        <form method="POST" action="{{ route('forgot.password.link') }}" autocomplete="off" class="reset-password-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <!-- Session Status -->
                            <x-auth-session-status class="session" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="validation" :errors="$errors" />


                            <div class="logo">
                                <img src="{{ asset('frontend/images/main-logo.png') }}" alt="bertjorak">
                            </div>
                            <div class="heading">
                                <h4>Reset Your Password</h4>
                                <h6>Enter your Email Address and we will send you a link to reset your password</h6>
                            </div>
                            <div class="actual-form">
                                <div class="input-wrap">
                                    <input type="text" id="login" minlength="4" class="input-field"
                                        autocomplete="off" type="text" name="email" :value="old('login')" required
                                        autofocus>
                                    <label>Email</label>
                                </div>

                                {{-- <div class="input-wrap">
                                    <input type="password" id="password" type="password" name="password" minlength="4"
                                        class="input-field" required autocomplete="current-password">
                                    <label>Password</label>
                                </div> --}}

                                <input type="Submit" value="Send Link" class="reset-password-button">

                                <p class="text">
                                    Back to Login
                                    <a href="{{ route('login') }}">Here</a>
                                </p>
                            </div>
                        </form>
                        {{-- <form method="POST" action="" autocomplete="off"> --}}
                            {{-- <div class="logo">
                                <img src="{{ asset('frontend/images/main-logo.png') }}" alt="bertjorak">
                            </div>   --}}

                            <!-- Validation Errors -->
                            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <x-auth-validation-errors class="validation" :errors="$errors" />

                            <div class="heading">
                                <h6>Already a member ?</h6>
                                <a href="#" class="toggle">Sign in</a>
                            </div>
                            <div class="actual-form">
                                <div class="input-wrap">
                                    <input type="text" id="name" minlength="4" class="input-field"
                                        autocomplete="off" name="name" :value="old('name')" required autofocus>
                                    <label>Username</label>
                                </div>

                                <div class="input-wrap">
                                    <input type="email" id="email" class="input-field" autocomplete="off"
                                        name="email" :value="old('email')" required>
                                    <label>Email</label>
                                </div>

                                <div class="input-wrap">
                                    <input type="password" id="password" minlength="4" class="input-field" name="password"
                                        required autocomplete="new-password">
                                    <label>Password</label>
                                </div>

                                <div class="input-wrap">
                                    <input type="password" id="password_confirmation" minlength="4" class="input-field"
                                        autocomplete="off" name="password_confirmation" required>
                                    <label>Confirm Password</label>
                                </div>

                                <input type="Submit" value="Sign Up" class="sign-up-button">

                                <p class="text">
                                    By signing up, i agree to
                                    <a href="">Terms of Services</a> and
                                    <a href="">Privacy Policy</a>
                                </p>
                            </div> --}}
                        {{-- </form> --}}
                    </div>
                    {{-- carousel --}}
                    <div class="crsl">
                        <div class="image-wrapper">
                            <img src="{{ asset('frontend/images/bg-carousel1.png') }}" class="bg-image img-1 show"
                                alt="">
                            <img src="{{ asset('frontend/images/bg-carousel2.png') }}" class="bg-image img-2"
                                alt="">
                            <img src="{{ asset('frontend/images/bg-carousel3.png') }}" class="bg-image img-3"
                                alt="">
                        </div>
                        <div class="text-slider">
                            <div class="text-wrap">
                                <div class="text-group">
                                    <h2>Stay Stunning and Positive</h2>
                                    <h2>Creativity & Colors</h2>
                                    <h2>Time to Spark with us!</h2>
                                </div>
                            </div>
                            <div class="bullets">
                                <span class="active" data-value="1"></span>
                                <span data-value="2"></span>
                                <span data-value="3"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </section>

    {{-- JS --}}
    <script type="text/javascript" src="{{ asset('js/account.js') }}"></script>
@endsection
