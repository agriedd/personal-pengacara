<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')
    <title>{{  $title ?? config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/publik.js') }}" defer></script>
    @stack('script')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Roboto+Condensed&display=swap" rel="stylesheet">
    @stack('css')
</head>
<body>
    @yield('beforecontent')
    <div id="app">
        @include('x.navbars.public', ['statik' => true, 'container' => true, 'light' => true ])
        <main>
            @yield('content')
        </main>
        <notification style="z-index: 1040"></notification>
    </div>
    @stack('footer')
</body>
</html>
