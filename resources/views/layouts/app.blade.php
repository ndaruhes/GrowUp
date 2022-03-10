<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
        $currURL = explode('/', Request::path());
        $prefixURL = ['member', 'mentor'];
    @endphp
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @if ($currURL[0] == '' || $currURL[0] != in_array($currURL[0], $prefixURL))
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <script src="{{ asset('js/dashboard.js') }}" defer></script>
    @endif
    @yield('cssExternal')
</head>

<body>
    {{-- NAVBAR --}}
    @if ($currURL[0] == '' || $currURL[0] != in_array($currURL[0], $prefixURL))
        @include('layouts.navbar')
    @else
        @include('layouts.dashboard')
    @endif

    {{-- CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    @include('layouts.footer')

    {{-- SCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    @yield("script")
</body>

</html>
