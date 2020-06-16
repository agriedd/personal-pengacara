{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin')

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    <div>
        <h4 class="font-weight-light">
            Panel Admin | Client 🤼
        </h4>
    </div>
    <div>
        List Client
        <ul>
            @forelse ($clients as $client)
                <li>
                    {{ $client->nama }} - 
                    @isset($client->insertBy)
                        diinput oleh {{ $client->insertBy->email }}
                    @endisset
                </li>
            @empty
                <li>
                    <div class="text-muted">
                        Belum ada data
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
@endsection

@push('footer')
    <script>
        window.addEventListener('load', ()=>{
            var app = new Vue({
                el: "#app",
                mixins: [window.Mixins.Navbar],
            });
        });
    </script>
@endpush