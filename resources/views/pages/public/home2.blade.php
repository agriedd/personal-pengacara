{{-- Ini Halaman Awal / Atau Halaman Utama Website --}}

@extends('layouts.app')

@section('content')
    <div>
        <div class="container-fluid landing" style="background-image: url('{{ asset('img/bg.jpg') }}')">
            <div class="text-left banner">
                <img src="{{ asset('img/logo_full.png') }}" alt="" style="width: 100%" class="logo">
                <h1 class="">
                    Selamat datang
                </h1>
                <div class="h5 font-weight-normal">
                    <div>
                        di website pengacara Kupang - NTT,
                        <strong>
                            BERNARD S. ANIN,SH.,MH
                        </strong>
                        & Rekan
                    </div>
                    <div>
                        Kantor Advokat atau Pengacara BERNARD S. ANIN,SH.,MH dan Rekan yang ber-alamat di Jl. Tirosa, RT 015 / RW 007, Kelurahan Mata Air, Kecamatan Kupang Tengah, Kabupaten Kupang
                    </div>
                </div>
            </div>
            <div>
                <a href="https://wa.me/6281338204888?text={{ urlencode("Saya ingin berkonsultasi dengan Anda.") }}" target="_blank" class="btn btn-rounded action shadow text-dark">
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