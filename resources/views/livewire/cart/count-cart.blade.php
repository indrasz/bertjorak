@if ($cartCount >= 1)
    <div class="d-flex">
        <img src="{{ asset('frontend/images/icon-cart.svg') }}" alt="cart-icon" />
    <div class="cart-badge">
        {{ $cartCount }}
    </div>
    </div>
    <style>
        .cart-badge {
            display: inline-block;
            min-width: 2em;
            max-height: 2em;
            /* em unit */
            padding: 0.3em;
            /* em unit */
            border-radius: 50%;
            font-size: 10px;
            text-align: center;
            background: #29a867;
            color: #fefefe;
            margin-left: -10px;
            margin-top: 2px;
        }
    </style>
@endif
