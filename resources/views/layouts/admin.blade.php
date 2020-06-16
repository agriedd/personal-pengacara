<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('script')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>
    @yield('beforecontent')
    <div id="app">
        <div class="wrapper">
            @yield('sidebar')
            <main class="py-4 section-body" :class="{'sidebar-active': navbar.getCollapse('sidebar', false)}">
                @yield('content')
            </main>
        </div>
        <div class="placeholder" v-cloak>
            <div class="loading center middle">
                <div class="loading-bar"></div>
            </div>
        </div>
    </div>
    @stack('footer')
</body>
</html>
