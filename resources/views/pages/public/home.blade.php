{{-- Ini Halaman Awal / Atau Halaman Utama Website --}}

@extends('layouts.app')

@section('content')
    <div>
        <div class="container-fluid landing" style="background-image: url('{{ asset('img/bg.jpg') }}'); background-attachment: fixed">
            <div class="banner">
                <img src="{{ asset('img/logo_full.png') }}" alt="" class="logo">
                <h1 class="font-weight-bold" style="font-family: 'Libre Baskerville', serif;">
                    {{-- Selamat datang --}}
                    <div>
                        Website Pengacara Kupang - NTT,
                    </div>
                    <div>
                        BERNARD S. ANIN,SH.,MH
                        & Rekan
                    </div>
                </h1>
                <div class="h5 font-weight-normal">
                    {{-- <div>
                        <strong>
                        </strong>
                    </div> --}}
                    <div>
                        Kantor Advokat atau Pengacara BERNARD S. ANIN,SH.,MH dan Rekan yang ber-alamat di Lorem, ipsum dolor.
                    </div>
                </div>
            </div>
            <div>
                <a href="https://wa.me/6281338204888?text={{ urlencode("Saya ingin berkonsultasi dengan Anda.") }}" target="_blank" class="btn btn-rounded action shadow text-dark" style="border-radius: .5rem!important">
                    KONSULTASI
                </a>
            </div>
        </div>
        @include('x.pages.home.profil')
        @include('x.pages.home.bahan-hukum')
        @include('x.pages.home.artikel')
        @include('x.pages.home.kontak')
        @include('x.pages.home.footer')
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