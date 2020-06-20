{{-- Ini Halaman Awal / Atau Halaman Utama Website --}}

@extends('layouts.app')

@section('content')
    <div>
        <div class="container-fluid landing" style="background-image: url('{{ asset('img/bg.jpg') }}')">
            <div class="text-right banner">
                <img src="{{ asset('img/logo_full.png') }}" alt="" class="logo">
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
                        Kantor Advokat atau Pengacara BERNARD S. ANIN,SH.,MH dan Rekan yang ber-alamat di Lorem, ipsum dolor.
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
    </div>
@endsection

@push('footer')
    <script>
        window.addEventListener('load', ()=>{
            var app = new Vue({
                el: "#app",
                mixins: [window.Mixins.Navbar]
            })
        })
    </script>
@endpush

@push('script')
    <script src="{{ asset('js/navbar.js') }}"></script>
@endpush