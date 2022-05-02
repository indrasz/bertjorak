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
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="">
                                <div class="p-1 mt-5">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 ">
                                            <label for="cityId" class="block mb-3 font-medium text-gray-700 text-md">Nomor
                                                Resi</label>
                                            <input type="text" placeholder="Masukkan Nomor Resi Pengiriman" name="nomorResi"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 ">
                                            <label for="cityId"
                                                class="block mb-3 font-medium text-gray-700 text-md">Transaction
                                                Status</label>
                                            <select name="cityId" id="cityId"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                <option value="Pending" selected>Pending</option>
                                                <option value="Succes" selected>Success</option>
                                                <option value="Cancel" selected>Cancel</option>
                                            </select>
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
                                    {{-- @else --}}
                                    {{-- <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" disabled>
                                            Approve
                                        </button>
                                    @endif --}}
                                </div>
                            </div>
                        </form>

                        <label for="transaction detail" class="block mb-3 font-medium text-md">Transaction Detail</label>
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
                    </div>

                </main>
            </div>
        </section>
    </main>

@endsection
