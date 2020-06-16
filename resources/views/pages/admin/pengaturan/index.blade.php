{{-- Halaman Panel Admin Pengaturan 🔥 --}}


@extends('layouts.admin')

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    <div class="container">
        <h4 class="font-weight-light">
            Pengaturan
        </h4>
        <ol>
            <li>
                Admin
            </li>
            <li>
                Pengaturan Profil
            </li>
            <li>
                Percobaan Login
            </li>
        </ol>
    </div>
@endsection

@push('footer')
    <script>
        window.addEventListener('load', ()=>{
            var app = new Vue({
                el: "#app",
                mixins: [ window.Mixins.Navbar ],
                created(){
                    console.log("wtf");
                }
            })
        })
    </script>
@endpush