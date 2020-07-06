<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('script')
    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Roboto+Condensed&display=swap" rel="stylesheet"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('x.navbars.public')
        <main class="">
            @yield('content')
        </main>
        <notification style="z-index: 1040"></notification>
    </div>
    @stack('footer')
</body>
</html>
