<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>

    @include('includes.dashboard.meta')

    <title>@yield('title') | Let's Camv</title>

    @stack('before-style')

    @include('includes.dashboard.style')

    @stack('after-style')

    @livewireStyles
</head>

<body class="antialiased">
    <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">

        @include('components.frontend.desktop')

        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 flex items-end bg-black bg-opacity-50 z-1 sm:items-center sm:justify-center"></div>

        @include('components.frontend.mobile')

        <div class="flex flex-col flex-1 w-full">
            @include('components.frontend.header')

            {{-- @include('sweetalert::alert') --}}

            @yield('content')
        </div>

    </div>

    @stack('before-script')

    @include('includes.dashboard.script')

    @stack('after-script')

    @livewireScripts
</body>

</html>
