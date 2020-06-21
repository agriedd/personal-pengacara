<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')
    <title>{{ config('app.name', 'Laravel') }}</title>
    @isset($appjs)
        <script src="{{ asset("js/{$appjs}") }}" defer></script>
    @else
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endisset
    @stack('script')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/js/eddlibrary.css') }}">
    @stack('css')
</head>
<body>
    @yield('beforecontent')
    <div id="app">
        <div class="wrapper" v-cloak>
            @yield('sidebar')
            <main class="section-body bg-light" :class="{'sidebar-active': navbar.getCollapse('sidebar', false)}">
                @yield('content')
            </main>
        </div>
        <div class="placeholder" v-cloak>
            <div class="loading center middle">
                <div class="loading-bar"></div>
            </div>
        </div>
        <div class="d-flex" style="z-index: 1040">
            <notification></notification>
        </div>
    </div>
    @stack('footer')
</body>
</html>
