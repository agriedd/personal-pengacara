@php
    $home = !!preg_match("/^(\/|home)$/", request()->route()->uri());
@endphp
<!-- Right Side Of Navbar -->
    <!-- Authentication Links -->
    <li class="nav-item px-1">
        <a class="nav-link text-dark h6 rounded" href="{{ route('home') }}">Halaman Awal</a>
    </li>
    <li class="nav-item px-1">
        <a class="nav-link text-dark h6 rounded" href="{{ $home ? "#profil" : route('home', '#profil') }}" @click="navbar.toggleCollapse('menuHome', false)">Profil</a>
    </li>
    <li class="nav-item px-1">
        <a class="nav-link text-dark h6 rounded" href="{{ route('home.artikel') }}">Artikel</a>
    </li>
    <li class="nav-item px-1">
        <a class="nav-link text-dark h6 rounded" href="{{ $home ? "#bahan-hukum" : route('home', '#bahan-hukum') }}" @click="navbar.toggleCollapse('menuHome', false)">Bahan Hukum</a>
    </li>
    <li class="nav-item px-1">
        <a class="nav-link text-dark h6 rounded" href="{{ route('home.galeri') }}" @click="navbar.toggleCollapse('menuHome', false)">Galeri</a>
    </li>
    @guest
        <li class="nav-item px-1">
            <a class="nav-link text-dark h6 rounded" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @else
        <li class="nav-item px-1">
            <a class="nav-link text-dark h6 rounded" href="{{ route('admin') }}">Panel Admin</a>
        </li>
    @endguest