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
                <div class="card clean bg-primary text-white">
                    <div class="card-body">
                        <div class="small">
                            Total Kunjungan:
                        </div>
                        <div class="display-4 font-weight-light text-right">
                            {{ $total_kunjungan }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <div class="card clean bg-primary text-white">
                    <div class="card-body">
                        <div class="small">
                            Total Kunjungan Bulan Lalu:
                        </div>
                        <div class="display-4 font-weight-light text-right">
                            {{ $total_kunjungan_bulan_lalu }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <div class="card clean bg-primary text-white">
                    <div class="card-body">
                        <div class="small">
                            Total Kunjungan Bulan Ini:
                        </div>
                        <div class="display-4 font-weight-light text-right">
                            {{ $total_kunjungan_bulan_ini }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 p-2">
                <div class="card clean bg-dark text-white">
                    <div class="card-body">
                        <div class="small">
                            Total Kunjungan Hari Ini:
                        </div>
                        <div class="display-4 font-weight-light text-right">
                            {{ $total_kunjungan_hari_ini }}
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
