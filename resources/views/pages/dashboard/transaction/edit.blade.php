@extends('layouts.app')

@section('title', ' Edit Transaction')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Edit and show Transaction
                    </h2>

                    @php
                        foreach ($orderShow as $os) {
                            $ka = $os;
                        }
                    @endphp
                    <ol class="inline-flex py-2 list-none">
                        <li class="flex items-center">
                            <a href="{{ route('dashboard.transaction.index') }}" class="text-gray-400">My Transaction</a>
                            <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512">
                                <path
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                            </svg>
                        </li>
                        <li class="flex items-center">
                            <a href="{{ route('dashboard.transaction.edit', $ka->kode_order) }}"
                                class="font-medium">{{ $ka->kode_order }}</a>
                        </li>
                    </ol>
                </div>
                <div class="col-span-4 lg:text-right">

                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        @if ($ka->status_transaksi == 'Waiting')
                            <form action="{{ route('dashboard.transaction.update', $ka->id_transaction) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                {{-- Durasi --}}
                                <input type="text" name="durasi" value="{{ $ka->durasi }}" hidden>

                                <div class="">
                                    <div class="p-1 mt-5">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 ">
                                                <label for="cityId"
                                                    class="block mb-3 font-medium text-gray-700 text-md">Receipt Number</label>
                                                <input type="text" placeholder="Enter the delivery receipt number"
                                                    name="nomorResi"
                                                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-1 py-4 text-right">
                                        <a href="{{ route('dashboard.transaction.index') }}" type="button"
                                            class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                                            onclick="return confirm('Are you sure want to back? , Any changes you make will not be saved.')">
                                            Back
                                        </a>

                                        {{-- @if (isset($order->file) == false) --}}
                                        <button type="submit"
                                            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                            onclick="return confirm('Are you sure want to submit this data?')">
                                            Approve
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif

                        <div class="flex justify-between pt-6">
                            <div>
                                <label for="transaction detail" class="block mb-3 font-medium text-md"
                                    style="font-weight: 700;">Transaction Detail</label>
                            </div>
                            @if ($ka->status_transaksi == 'Pending')
                                <span
                                    class="inline-flex items-center justify-center px-4 py-3 mb-4 mr-2 text-sm leading-none text-white font-semibold rounded-md"
                                    style="background-color: #80dd07;">{{ $ka->status_transaksi }}</span>
                            @elseif ($ka->status_transaksi == 'Waiting')
                                <span
                                    class="inline-flex items-center justify-center px-4 py-3 mb-4 mr-2 text-sm leading-none text-white font-semibold rounded-md"
                                    style="background-color: #a007dd;">{{ $ka->status_transaksi }}</span>
                            @elseif ($ka->status_transaksi == 'On Delivery')
                                <span
                                    class="inline-flex items-center justify-center px-4 py-3 mb-4 mr-2 text-sm leading-none text-white font-semibold rounded-md"
                                    style="background-color: #008bcc;">{{ $ka->status_transaksi }}</span>
                            @elseif ($ka->status_transaksi == 'Success')
                                <span
                                    class="inline-flex items-center justify-center px-4 py-3 mb-4 mr-2 text-sm leading-none text-white font-semibold rounded-md"
                                    style="background-color: #17e72f;">{{ $ka->status_transaksi }}</span>
                            @endif
                        </div>
                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">Product Name</th>
                                    <th class="py-4" scope="">Quantity</th>
                                    <th class="py-4" scope="">Total Price</th>
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
                                                    @endphp
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ asset('/storage/products/images/' . $img[0]) }}" alt=""
                                                        loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true">
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">{{ $ka->title }}</p>
                                                    @if ($ka->pilihanSelected != null)
                                                        <p class="text-sm text-gray-400">Color / Type :
                                                            {{ $ka->pilihanSelected }}
                                                        </p>
                                                    @endif
                                                    @if ($ka->sizeSelected != null)
                                                        <p class="text-sm text-gray-400">Size : {{ $ka->sizeSelected }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
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

                        @php
                            foreach ($orderShow as $key => $value) {
                                $get = $value;

                                $dataUser = App\Models\User::where('id',$value->id_buyer)->first();
                            }
                            
                        @endphp

                        @if ($get->notes != null)
                            <div class="py-2">
                                <h3 style="font-size: 1.1rem; font-weight: 800;">Notes
                                </h3>
                                <p class="text-justify">{{ $get->notes }}</p>
                            </div>
                        @endif

                        <div class="pt-6">
                            <h3 class="pb-2" style="font-size: 1.1rem; font-weight: 800;">Customer Data
                            </h3>

                            <table class="w-full mb-2">
                                <tr>
                                    <td class="text-sm text-serv-text">
                                        Name :
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        {{ $value->name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        Email : 
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        {{ $value->email }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        Phone Number : 
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        {{ $value->phone_number }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        Label Address : 
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        {{ $value->type_address }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        Country : 
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        @php
                                            $countryName = \App\Models\InternationalDestination::where('country_id',$dataUser->id_country)->first();
                                        @endphp
                                        {{ $countryName->country_name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        City : 
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        {{ $dataUser->city_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        Subdistrict :
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        {{ $dataUser->subdistrict_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        Area :
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        {{ $dataUser->area_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        Postal Code :
                                    </td>
                                    <td class="mb-4 text-sm font-semibold text-right text-black">
                                        {{ $value->zipcode }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-sm leading-7 text-serv-text">
                                        Detail Address :
                                    </td>
                                    <td class="w-1/2 mb-4 text-sm font-semibold text-right text-black">
                                        {{ $value->detail_address }}
                                    </td>
                                </tr>

                            </table>
                        </div>

                        <div style="padding-top: 2em;">
                            <h3 style="font-size: 1.1rem; font-weight: 800;">Order Summary
                            </h3>
                            <div style="padding-top: 1em;" class="pt- pb-2 features-list">
                                <table class="w-full mb-4">
                                    <tr>
                                        <td class="text-sm text-serv-text">
                                            Order :
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            {{ $value->kode_order }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-sm text-serv-text">
                                            Order Date :
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
                                        <td class="text-sm leading-7 text-serv-text">
                                            Courier Services :
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            {{ $value->id_kurir }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-sm leading-7 text-serv-text">
                                            Delivery Type :
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            {{ $value->id_jenisKurir }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-sm leading-7 text-serv-text">
                                            Receipt Number :
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            @if ($value->nomorResi != null)
                                                {{ $value->nomorResi }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-sm leading-7 text-serv-text">
                                            Shipping Cost :
                                        </td>
                                        <td class="mb-4 text-sm font-semibold text-right text-black">
                                            @currency($value->ongkir)
                                        </td>
                                    </tr>

                                </table>

                                <table class="w-full mb-4">
                                    <tr>
                                        <td class="text-sm leading-7 text-serv-text">
                                            Total Payment :
                                        </td>
                                        <td class="mb-4 text-xl font-semibold text-right text-serv-button">
                                            @currency($value->totalCost)
                                        </td>
                                    </tr>

                                </table>

                                @if ($value->status_transaksi != 'Pending')
                                    <a href="{{ url('/transaction/download', $get->kode_order) }}"
                                        class="btn btn-primary" target="_blank">
                                        <button
                                            class="text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center self-center"
                                            style="background: #F40F02; width: 100%;">
                                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                                            </svg>
                                            <span>Export PDF</span>
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </section>
    </main>

@endsection
