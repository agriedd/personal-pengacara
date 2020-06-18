{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin')

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    @component('x.headers.admin')
        Artikel
    @endcomponent
    @component('x.breadcrumb.admin')
        <div class="breadcrumb-item active">
            Artikel
        </div>
    @endcomponent
    <div class="container">
        <div class="card clean">
            <div class="card-body">
                <div>
                    List Articles
                    <ul>
                        @forelse ($articles as $article)
                            <li>
                                <div class="font-weight-bold">
                                    {{ $article->info->title }}
                                </div>
                                <div class="small text-muted py-2">
                                    {{ $article->created_at->format('d-m-Y') }}
                                </div>
                                <div class="small">
                                    {{ $article->info->body }}
                                </div>
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
            </div>
        </div>
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
