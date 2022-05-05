<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('includes.meta')

    <title>@yield('title') | Bertjorak</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
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
