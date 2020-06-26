@php
    $statik = isset($statik) ? $statik : false;
    $container = isset($container) ? $container : false;
    $light = isset($light) ? $light : false;
@endphp
<nav class="navbar navbar-expand-md navbar-dark navbar-home {{ $statik ? null : 'position-absolute'}} w-100">
    @if($container)
        <div class="container-lg">
    @endif
    <button @click="navbar.toggleCollapse('menuHome')" class="btn btn-link {{ $light ? 'text-dark' : 'text-light' }} shadow-none d-block d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <svg class="bi bi-list" width="1.8em" height="1.8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </button>
    <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav-default {{ $light ? 'light' : null }}">
            @component('x.navbars.home')@endcomponent
        </ul>
    </div>
    <a class="navbar-brand ml-auto" href="{{ url('/') }}">
    </a>
    @if($container)
        </div>
    @endif
</nav>
<div class="sidebar-home {{ $statik ? 'full' : null }} navbar-light d-md-none d-block" :class="{show: navbar.getCollapse('menuHome')}" style="background-image: url('{{ asset('img/bg.svg') }}'); background-position: left bottom; background-repeat: no-repeat; background-size: cover">
    <div>
        <div class="d-flex justify-content-between p-3 mb-3">
            <div class="pl-3">
                <img src="{{ asset('img/logo_full.png') }}" alt="" class="logo" style="max-height: 80px; max-width: 70%;">
            </div>
            <button @click="navbar.toggleCollapse('menuHome')" class="btn btn-link text-dark shadow-none d-block d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <svg class="bi bi-x" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                    <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                </svg>
            </button>
        </div>
    </div>
    <ul class="navbar-nav">
        @component('x.navbars.home')@endcomponent
    </ul>
</div>