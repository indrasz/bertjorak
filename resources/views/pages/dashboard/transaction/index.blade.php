@extends('layouts.app')

@section('title', ' My Order')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        My Order
                    </h2>
                    <p class="text-sm text-gray-400">
                        {{ count($orderData) }} Total Order
                    </p>
                </div>
                <div class="col-span-4 lg:text-right">

                </div>
            </div>
        </div>

        @if (count($orderData) >= 1)
            <section class="container px-6 mx-auto mt-5">
                <div class="grid gap-5 md:grid-cols-12">
                    <main class="col-span-12 p-4 md:pt-0">
                        <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                            <table class="w-full" aria-label="Table">
                                <thead>
                                    <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                        <th class="py-4" scope="">Kode Order</th>
                                        <th class="py-4" scope="">Nama Pemesan</th>
                                        <th class="py-4" scope="">Total Jenis Barang</th>
                                        <th class="py-4" scope="">Tanggal Pemesanan</th>
                                        <th class="py-4" scope="">Total Harga</th>
                                        <th class="py-4" scope="">Status</th>
                                        <th class="py-4" scope="">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($orderData as $o)
                                        <tr class="text-gray-700 border-b">
                                            <td class="px-1 py-5 text-sm w-2/8">
                                                <div class="flex items-center text-sm">
                                                    <div>
                                                        <p class="font-medium text-black">{{ $o->id_order }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                {{ $o->name }}
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                @php
                                                    $getIdCart = json_decode($o->id_cart);
                                                    $getCount = count($getIdCart);
                                                @endphp
                                                {{ $getCount }} Jenis Barang
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                @php
                                                    $date = date_create($o->date_order);
                                                @endphp
                                                {{ date_format($date, 'D, d/m/y') }}
                                                <br>
                                                {{ date_format($date, 'H:i:s') }}
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                @currency($o->totalCost)
                                            </td>
                                            <td class="px-1 py-5 text-sm text-green-500 text-md">
                                                {{ $o->status }}
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <a href="/dashboard/requests/details.php"
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
        @endif
    </main>

@endsection
