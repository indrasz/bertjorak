@extends('layouts.app')

@section('title', ' Add Service')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Add Your Product
                    </h2>
                    <p class="text-sm text-gray-400">
                        Let's upload the our product
                    </p>
                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="#" class="text-gray-400">Product</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <p class="font-medium">Add New Product</p>
                </li>
            </ol>
        </nav>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                        <form action="{{ route('dashboard.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6">
                                            <label for="title" class="block mb-3 font-medium text-gray-700 text-md">Nama
                                                Produk</label>

                                            <input placeholder="Nama Produk yang ingin ditambahkan" type="text" name="name"
                                                id="name" autocomplete="name"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ old('name') }}" required>

                                            @if ($errors->has('name'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6">
                                            <label for="price" class="block mb-3 font-medium text-gray-700 text-md">Harga
                                                Produk</label>

                                            <input placeholder="Total Harga Produk " type="number" name="price" id="price"
                                                autocomplete="price"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ old('price') }}" required>

                                            @if ($errors->has('price'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('price') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="thumbnail-service"
                                                class="block mb-3 font-medium text-gray-700 text-md">Thumbnail Product
                                                Feeds</label>

                                            <input placeholder="Thumbnail 1" type="file" name="photos[]" id="photos"
                                                autocomplete="photos"
                                                class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">

                                            @if ($errors->has('photos[]'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('photos') }}</p>
                                            @endif

                                            <div id="newThumbnailRow"></div>

                                            <button type="button"
                                                class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                                                id="addThumbnailRow">
                                                Tambahkan Gambar +
                                            </button>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="desc"
                                                class="block mb-3 font-medium text-gray-700 text-md">Description</label>
                                            <textarea name="desc" id="desc" cols="30" rows="10"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ old('desc') }}"></textarea>

                                            @if ($errors->has('desc'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('desc') }}</p>
                                            @endif
                                        </div>


                                        <div class="col-span-6">
                                            <label for="weight"
                                                class="block mb-3 font-medium text-gray-700 text-md">Berat</label>
                                            <input placeholder="Berat Barang" type="number" name="weight" id="weight"
                                                autocomplete="weight"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ old('weight') }}">

                                            @if ($errors->has('weight'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('weight') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="stock" class="block mb-3 font-medium text-gray-700 text-md">Jumlah
                                                Stok</label>
                                            <input placeholder="Tambah Minimum Order" type="number" name="stock" id="stock"
                                                autocomplete="stock"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ old('stock') }}">

                                            @if ($errors->has('stock'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('stock') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="size" class="block mb-3 font-medium text-gray-700 text-md">Size
                                                Produk</label>

                                            <input placeholder="size" type="text" name="size[]" id="size"
                                                autocomplete="size"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ old('size[]') }}" required>

                                            <div id="newAdvantagesRow"></div>

                                            <button type="button"
                                                class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                                                id="addAdvantagesRow">
                                                Tambahkan Size Yang Tersedia +
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                <div class="px-4 py-3 text-right sm:px-6">
                                    <a href="{{ route('dashboard.product.index') }}" type="button"
                                        class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                                        onclick="return confirm('Are you sure want to cancel? , Any changes you make will not be saved.')">
                                        Cancel
                                    </a>

                                    <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                        onclick="return confirm('Are you sure want to submit this data ?')">
                                        Create Product
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection

@push('after-script')
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>

    <script type="text/javascript">
        // add row
        $("#addAdvantagesRow").click(function() {
            var html = '';
            html +=
                '<input placeholder="size" type="text" name="size[]" id="size" autocomplete="size" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" required>';

            $('#newAdvantagesRow').append(html);
        });

        $("#addThumbnailRow").click(function() {
            var html = '';
            html +=
                '<input placeholder="Keunggulan 3" type="file" name="photos[]" id="photos" autocomplete="photos" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" required>';

            $('#newThumbnailRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeAdvantagesRow', function() {
            $(this).closest('#inputFormAdvantagesRow').remove();
        });
    </script>
@endpush
