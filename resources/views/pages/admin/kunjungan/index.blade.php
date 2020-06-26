{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'kunjungan.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    @component('x.headers.admin')
        Kunjungan
    @endcomponent
    @component('x.breadcrumb.admin')
        <div class="breadcrumb-item active">
            Kunjungan
        </div>
    @endcomponent

    <div class="container">
        <div class="row m-0 py-3">
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <div class="card border-0 alert-primary border-primary text-primary h-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="pr-3">
                                <svg class="bi bi-graph-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
                                    <path fill-rule="evenodd" d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"/>
                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="h3 font-weight-light mb-0">
                                    {{ $total_kunjungan }}
                                </div>
                                <div class="small">
                                    Total Kunjungan
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="divider m-0">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <div class="card border-0 alert-dark text-dark h-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="pr-3">
                                <svg class="bi bi-calendar-check-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM0 5h16v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm10.854 3.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="h3 font-weight-light mb-0">
                                    {{ $total_kunjungan_bulan_lalu }}
                                </div>
                                <div class="small">
                                    Total Kunjungan Bulan Lalu
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="divider mb-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="ml-auto">
                                <div class="small">
                                    {{ ($total_kunjungan_bulan_lalu / $total_kunjungan) * 100  }}% dari total kunjungan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <div class="card border-0 bg-dark text-light h-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="pr-3">
                                <svg class="bi bi-graph-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
                                    <path fill-rule="evenodd" d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"/>
                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="h3 font-weight-light text-right mb-0">
                                    {{ $total_kunjungan_bulan_ini }}
                                </div>
                                <div class="small">
                                    Total Kunjungan Bulan Ini
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $up = ($total_kunjungan_bulan_ini - $total_kunjungan_bulan_lalu) > 0;
                    @endphp
                    <hr class="divide m-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="ml-auto">
                                <div class="d-flex">
                                    <div class="{{ $up ? 'text-success' : 'text-danger' }} small">
                                        <div class="justify-middle">
                                            {{ $up ? '+' : '-' }} {{ $total_kunjungan_bulan_ini - $total_kunjungan_bulan_lalu }} dari bulan lalu
                                        </div>
                                    </div>
                                    <div class="pl-3">
                                        @if($up)
                                            <div class="text-success">
                                                <svg class="bi bi-graph-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
                                                    <path fill-rule="evenodd" d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"/>
                                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z"/>
                                                </svg>
                                            </div>
                                        @else
                                            <div class="text-danger">
                                                <svg class="bi bi-graph-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
                                                    <path fill-rule="evenodd" d="M14.39 9.041l-4.349-5.436L7 6.646 3.354 3l-.708.707L7 8.061l2.959-2.959 3.65 4.564.781-.625z"/>
                                                    <path fill-rule="evenodd" d="M10 9.854a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-1 0v3.5h-3.5a.5.5 0 0 0-.5.5z"/>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <div class="card bg-warning border-0 text-dark h-100">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="pr-3">
                                <svg class="bi bi-graph-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
                                    <path fill-rule="evenodd" d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"/>
                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="display-4 font-weight-light text-right">
                                    {{ $total_kunjungan_hari_ini }}
                                </div>
                                <div class="small">
                                    Total Kunjungan Hari Ini:
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card clean">
            @component('x.forms.filter', [ 'name' => 'kunjungan', 'label' => "Aunjungan", 'model' => 'kunjungan', 'tambah' => false ])
            @endcomponent
            <hr class="dropdown-divider m-0">
            @include('x.tables.kunjungan')
        </div>
        <div class="mb-3"></div>
    </div>
@endsection

@push('meta')
    <meta name="kunjungan_all" content="{{ route('kunjungan.index') }}">
    <meta name="kunjungan_insert" content="{{ route('kunjungan.store') }}">
    <meta name="kunjungan_delete" content="{{ route('kunjungan.destroy', ["kunjungan" => "#id"]) }}">
    <meta name="kunjungan_update" content="{{ route('kunjungan.update', ["kunjungan" => "#id"]) }}">
@endpush

@push('script')
    <script src="{{ asset('/js/eddlibrary.umd.min.js') }}" defer></script>
@endpush
@push('footer')
    <script>
        window.addEventListener('load', ()=>{
            Vue.use(eddlibrary.Notification);
            var app = new Vue({
                el: "#app",
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.Kunjungan],
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
                data: {
                    time: 5000,
                },
                methods: {
                    submit(type, e, form = 'insert'){},
                    removeImage(type, name){},
                    konfirmasiHapus(type, index){},
                    update(type, index){},
                    insert(type, index){}
                },
                created(){
                    this.kunjungan.all(this);
                }
            });
        });
    </script>
@endpush
