{{-- Halaman Panel Admin 🔥 --}}


@extends('layouts.admin')

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    <div class="container">
        <h4 class="font-weight-light">
            Informasi panel admin
        </h4>
        <ol>
            <li>
                informasi artikel
            </li>
            <li>
                Kunjungan
            </li>
            <li>
                Percobaan Login
            </li>
            <li>
                Link diklik
            </li>
            <li>
                pengaturan
            </li>
        </ol>
    </div>
@endsection

@push('footer')
    <script defer>
        var app = new Vue({
            el: "#app",
            mixins: [ window.Mixins.Navbar ],
            created(){
                console.log("wtf");
            }
        })
    </script>
@endpush