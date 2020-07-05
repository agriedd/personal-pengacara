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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/js/eddlibrary.css') }}">
    @stack('css')
</head>
<body>
    @yield('beforecontent')
    <div id="app" class="bg-dark">
        @stack('prependcontent')
        <div class="wrapper" v-cloak>
            @yield('sidebar')
            <main class="section-body bg-dark p-2 p-lg-3" :class="{'sidebar-active': navbar.getCollapse('sidebar', false)}">
                <div class="card border-0 shadow bg-white position-sticky" style="top: -.25rem; z-index: 1;">
                    <div class="px-md-3">
                        @yield('content')
                    </div>
                </div>
                @stack('appendcontent')
            </main>
        </div>
        <div class="placeholder" v-cloak>
            <div class="loading center middle">
                <div class="loading-bar"></div>
            </div>
        </div>
        <notification style="z-index: 1040"></notification>
    </div>
    @stack('footer')
</body>
</html>
