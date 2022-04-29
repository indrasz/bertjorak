@extends('layouts.app')

@section('title', ' Edit Transaction')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Your Transaction
                    </h2>
                </div>
                <div class="col-span-4 lg:text-right">

                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">

                        <label for="transaction detail" class="block mb-3 font-medium text-md"
                            style="font-weight: 700;">Transaction Detail</label>
                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">Product Name</th>
                                    <th class="py-4" scope="">Quantity</th>
                                    <th class="py-4" scope="">Total Price/Item</th>
                                    <th class="py-4" scope="">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($orderShow as $os)
                                    <tr class="text-gray-700 border-b">
                                        <td class="px-1 py-5 text-sm w-2/8">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    @php
                                                        $img = json_decode($os->images);
                                                        //dd($img[0]);
                                                    @endphp
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ asset('/storage/products/images/' . $img[0]) }}" alt=""
                                                        loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">{{ $os->title }}</p>
                                                    <p class="text-sm text-gray-400">Size Product</p>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- <td class="w-2/6 px-1 py-5">
                                        <div class="flex items-center text-sm">
                                            <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-medium text-black">
                                                    Design WordPress <br>E-Commerce Modules
                                                </p>
                                            </div>
                                        </div>
                                    </td> --}}
                                        <td class="px-1 py-5 text-sm">
                                            {{ $os->jumlah }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            @currency($os->price * $os->jumlah)
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            <a href="{{ route('detailitem.show', $os->id_cart) }}"
                                                class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-email">
                                                Details

                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div style="padding-top: 2em;">
                            <h3 style="font-size: 1.1rem; font-weight: 800;">Ringkasan Pemesanan
                            </h3>
                            <div style="padding-top: 1em;" class="pt- pb-2 features-list">
                                <table class="w-full mb-4">
                                    @php
                                        foreach ($orderShow as $key => $value) {
                                            $get = $value;
                                        
                                            //dd($get);
                                        }
                                        
                                    @endphp
                                    <tr>
                                        <td class="text-sm text-serv-text">
                                            Kode Order
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            {{ $value->kode_order }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-sm text-serv-text">
                                            Tanggal Order
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            @php
                                                $date = date_create($value->date_order);
                                            @endphp
                                            {{ date_format($date, 'D, d/m/y') }}
                                        </td>
                                    </tr>
                                </table>

                                <table class="w-full mb-2">
                                    <tr>
                                        <td class="text-sm text-serv-text">
                                            Name
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            {{ $value->name }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-sm leading-7 text-serv-text">
                                            Phone Number
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            {{ $value->phone_number }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-sm leading-7 text-serv-text">
                                            Jasa Kurir
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            {{ $value->id_kurir }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-sm leading-7 text-serv-text">
                                            Jenis Pengiriman
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            {{ $value->id_jenisKurir }}
                                        </td>
                                    </tr>

                                </table>

                                <table class="w-full mb-4">
                                    <tr>
                                        <td class="text-sm leading-7 text-serv-text">
                                            Total Harga:
                                        </td>
                                        <td class="mb-4 text-xl font-semibold text-right text-serv-button">
                                            @currency($value->totalCost)
                                        </td>
                                    </tr>

                                </table>

                                <style>
                                    .payButton {
                                        background-color: #44c767;
                                        border-radius: 7px;
                                        border: 1px solid #18ab29;
                                        display: inline-block;
                                        cursor: pointer;
                                        color: #ffffff;
                                        font-family: Verdana;
                                        font-size: 17px;
                                        font-weight: bold;
                                        padding: 5px 76px;
                                        text-decoration: none;
                                        text-shadow: 0px 1px 15px #2f6627;
                                    }

                                    .payButton:hover {
                                        background-color: #59ff00;
                                    }

                                    .payButton:active {
                                        position: relative;
                                        top: 1px;
                                    }

                                </style>
                                <button class="payButton" style="background-color: blue; width: 100%;" id="pay-button">
                                    Bayar
                                </button>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </section>
    </main>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                    send_response_to_form(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                    send_response_to_form(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                    send_response_to_form(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });


        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#sumbit_form').submit();
        }
    </script>
@endsection
