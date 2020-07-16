{{-- Ini Halaman Awal / Atau Halaman Utama Website --}}

@extends('layouts.app')

@section('content')
    <div>
        <div class="d-flex justify-content-center flex-md-row flex-column home-content">
            <div style="flex: 1 1 auto;" class="w-100">
                @include('x.pages.home.landing')
                @include('x.pages.home.profil')
                @include('x.pages.home.bahan-hukum')
                @include('x.pages.home.artikel')
                @include('x.pages.home.kontak')
                @include('x.pages.home.footer')
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script src="{{ asset('/js/eddlibrary.umd.min.js') }}" defer></script>
    <script>
        window.addEventListener('load', ()=>{
            Vue.use(eddlibrary.Notification);
            Vue.use(eddlibrary.Plugins);
            var app = new Vue({
                el: "#app",
                components: {notification: eddlibrary.Notification},
                mixins: [window.Mixins.Navbar, window.Mixins.Init]
            })
        })
    </script>
@endpush

@push('script')
@endpush

@push('meta')
    <meta property="og:url"                content="{{ url('/') }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ env('APP_NAME') }}" />
    <meta property="og:description"        content="Website pengacara Kupang - NTT, BERNARD S. ANIN,SH.,MH & Rekan | Kantor Advokat atau Pengacara BERNARD S. ANIN,SH.,MH dan Rekan yang ber-alamat di Jl. Tirosa, RT 015 / RW 007, Kelurahan Mata Air, Kecamatan Kupang Tengah, Kabupaten Kupang" />
    <meta property="og:image"              content="{{ asset('img/logo_full.png') }}" />
    
    <meta name="twitter:card" content="summary" />
    {{-- <meta name="twitter:site" content="@nytimesbits" /> --}}
    {{-- <meta name="twitter:creator" content="@nickbilton" /> --}}
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="{{ env('APP_NAME') }}" />
    <meta property="og:description" content="Website pengacara Kupang - NTT, BERNARD S. ANIN,SH.,MH & Rekan | Kantor Advokat atau Pengacara BERNARD S. ANIN,SH.,MH dan Rekan yang ber-alamat di Jl. Tirosa, RT 015 / RW 007, Kelurahan Mata Air, Kecamatan Kupang Tengah, Kabupaten Kupang" />
    <meta property="og:image" content="{{ asset('img/logo_full.png') }}" />
@endpush