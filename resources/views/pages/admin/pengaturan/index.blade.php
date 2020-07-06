{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'kunjungan.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    @component('x.headers.admin')
        Pengaturan
    @endcomponent
@endsection
@push('appendcontent')
    <div class="card clean my-2 bg-light">
        @component('x.breadcrumb.admin')
            <div class="breadcrumb-item active">
                Pengaturan
            </div>
        @endcomponent
        <div class="container">
            
            <div class="card clean">
                <div class="row m-0 flex-lg-row-reverse">
                    <div class="col-md-6 px-0">
                        <div class="card clean bg-blue h-100">
                            <div class="card-body">
                                <div class="card clean">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="img-lg shadow bg-gray-light" style="border-radius: 1rem">

                                            </div>
                                        </div>
                                        <div class="d-flex pt-5">
                                            <div class="px-3">
                                                <div class="justify-middle">
                                                    <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="h5">
                                                    {{ auth()->user()->username }}
                                                </div>
                                                <div class="small">
                                                    {{ auth()->user()->email }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex justify-content-between p-3">
                                        <div class="small">
                                            <div class="font-weight-bold text-dark">
                                                Pengaturan Informasi Akun
                                            </div>
                                            <div class="text-muted">
                                                Lorem ipsum dolor sit amet.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="justify-middle">
                                                <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex justify-content-between p-3">
                                        <div class="small">
                                            <div class="font-weight-bold text-dark">
                                                Pengaturan Akun
                                            </div>
                                            <div class="text-muted">
                                                Lorem ipsum dolor sit amet.
                                            </div>
                                        </div>
                                        <div>
                                            <div class="justify-middle">
                                                <svg class="bi bi-gear" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                                                    <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3"></div>
        </div>
    </div>
@endpush

@push('meta')
    {{-- <meta name="kunjungan_all" content="{{ route('kunjungan.index') }}">
    <meta name="kunjungan_insert" content="{{ route('kunjungan.store') }}">
    <meta name="kunjungan_delete" content="{{ route('kunjungan.destroy', ["kunjungan" => "#id"]) }}">
    <meta name="kunjungan_update" content="{{ route('kunjungan.update', ["kunjungan" => "#id"]) }}"> --}}
@endpush

@push('script')
    <script src="{{ asset('/js/eddlibrary.umd.min.js') }}" defer></script>
@endpush
@push('footer')
    <script>
        window.addEventListener('load', ()=>{
            Vue.use(eddlibrary.Notification);
            Vue.use(eddlibrary.Table2);
            var app = new Vue({
                el: "#app",
                mixins: [window.Mixins.Init, window.Mixins.Navbar],
                components: { 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
                data: {
                    time: 5000,
                },
                methods: {
                    submit(type, e, form = 'insert'){},
                    removeImage(type, name){},
                    konfirmasiHapus(type, index){},
                    update(type, index){},
                    insert(type, index){},
                    filter(type, name){
                    },
                    page(type, name, data){
                    },
                    sort(type, name, data){
                    }
                },
                created(){
                    this.kunjungan.all(this);
                }
            });
        });
    </script>
@endpush
