@extends('layouts.app')

@section('title', ' Profile')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        My Profile
                    </h2>
                </div>
                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('dashboard.profile.edit', Auth::user()->id) }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                            Edit My Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    
                </main>
            </div>
        </section>
    </main>

    {{-- <div class="flex h-screen">
        <div class="m-auto text-center">
            <img src="{{ asset('/assets/images/empty-illustration.svg') }}" alt="" class="w-48 mx-auto">
            <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                There is No Requests Yet
            </h2>
            <p class="text-sm text-gray-400">
                It seems that you haven’t provided any service. <br>
                Let’s create your first service!
            </p>

            <div class="relative mt-0 md:mt-6">
                <a href="#" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                    + Add Services
                </a>
            </div>
        </div>
    </div> --}}

@endsection
