@extends('layouts.front')

@section('title', 'Product')

@section('content')

    {{-- Navigation bar --}}
    @include('includes.Frontend.navbar')

    <style>
        .card-related-carousel:hover {
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            transition: 1s;
        }

    </style>

    <section class="related-product w-100 h-100">
        <div class="container px-4 mt-4">

            <div class="caption-related-product py-3 text-center">
                Explore Our Product
            </div>
            <br>

            <livewire:product.product-list />
    </section>

    {{-- Footer --}}
    @include('includes.Frontend.footer')
@endsection
