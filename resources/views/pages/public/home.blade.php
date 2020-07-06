{{-- Ini Halaman Awal / Atau Halaman Utama Website --}}

@extends('layouts.app')

@section('content')
    <div>
        <div class="d-flex justify-content-center flex-md-row flex-column home-content">
            @include('x.nav.mini-sidebar-home')
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