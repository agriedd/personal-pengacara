<!-- Right Side Of Navbar -->
    <!-- Authentication Links -->
    <li class="nav-item px-1">
        <a class="nav-link text-white h5 font-weight-normal" href="{{ route('home') }}">Halaman Awal</a>
    </li>
    <li class="nav-item px-1">
        <a class="nav-link text-white h5 font-weight-normal" href="#profil" @click="navbar.toggleCollapse('menuHome', false)">Profil</a>
    </li>
    <li class="nav-item px-1">
        <a class="nav-link text-white h5 font-weight-normal" href="#">Client</a>
    </li>
    <li class="nav-item px-1">
        <a class="nav-link text-white h5 font-weight-normal" href="#">Galeri</a>
    </li>
    <li class="nav-item px-1">
        <a class="nav-link text-white h5 font-weight-normal" href="#">Artikel</a>
    </li>
    @guest
        <li class="nav-item px-1">
            <a class="nav-link text-white h5 font-weight-normal" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item px-1">
                <a class="nav-link text-white h5 font-weight-normal" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item px-1">
            <a class="nav-link text-white h5 font-weight-normal" href="{{ route('admin') }}">Panel Admin</a>
        </li>
    @endguest