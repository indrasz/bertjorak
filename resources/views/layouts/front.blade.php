<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('includes.meta')

    <title>@yield('title') | Bertjorak</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

    @livewireStyles
</head>

<body>

    @yield('content')

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

    @livewireScripts

    @include('sweetalert::alert')
</body>

</html>
