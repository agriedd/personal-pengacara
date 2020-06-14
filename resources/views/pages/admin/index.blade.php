{{-- Halaman Panel Admin 🔥 --}}


@extends('layouts.admin')

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    <div>
        <h4 class="font-weight-light">
            Panel Admin
        </h4>
    </div>
@endsection

@push('footer')
    <script async>
        var app = new Vue({
            el: "#app",
            mixins: [ window.Mixins.Navbar ],
            created(){
                console.log("wtf");
            }
        })
    </script>
@endpush