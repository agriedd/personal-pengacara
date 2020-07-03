{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'kunjungan.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    @component('x.headers.admin')
        Kunjungan
    @endcomponent
@endsection
@push('appendcontent')
    <div class="card clean my-2 bg-light">
        @component('x.breadcrumb.admin')
            <div class="breadcrumb-item active">
                Kunjungan
            </div>
        @endcomponent
        <div class="container">
            
            @include('x.info.kunjungan-situs')

            <div class="card clean">
                <transition-group name="move" tag="div" class="row m-0 flex-lg-row-reverse" mode="out-in">
                    <div v-if="kunjungan.getCollapse('filter')" class="col-lg-4 p-0 d-flex" key="filter">
                        <div class="w-100">
                            @include('x.filters.default', ['model' => 'kunjungan'])
                        </div>
                    </div>
                    <div class="col-lg p-0" key="table">
                        @component('x.forms.filter', [ 'name' => 'kunjungan', 'label' => "Kunjungan", 'model' => 'kunjungan', 'tambah' => false ])
                            @slot('action')
                                <button class="btn btn-link text-dark shadow-none" type="button" @click="kunjungan.toggleCollapse('filter')">
                                    <transition name="zoom" mode="out-in">
                                        <div :key="kunjungan.getCollapse('filter')">
                                            <div v-if="kunjungan.getCollapse('filter')">
                                                <svg class="bi bi-fullscreen-exit" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M5.5 0a.5.5 0 0 1 .5.5v4A1.5 1.5 0 0 1 4.5 6h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 10 4.5v-4a.5.5 0 0 1 .5-.5zM0 10.5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 6 11.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zm10 1a1.5 1.5 0 0 1 1.5-1.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4z"/>
                                                </svg>
                                            </div>
                                            <div v-else>
                                                <svg class="bi bi-fullscreen" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </transition>
                                </button>
                            @endslot
                        @endcomponent
                        <hr class="dropdown-divider m-0">
                        @include('x.tables.kunjungan')
                    </div>
                </transition-group>
            </div>
            <div class="mb-3"></div>
        </div>
    </div>
@endpush

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
            Vue.use(eddlibrary.Table2);
            // Vue.use(eddlibrary.Publ);
            var app = new Vue({
                el: "#app",
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.Kunjungan],
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
                        this.kunjungan.saveFilter(this);
                    },
                    page(type, name, data){
                        this.kunjungan.option.filter.page = data.page;
                        this.kunjungan.all(this);
                    },
                    sort(type, name, data){
                        this.kunjungan.setSort(data.data, this)
                    }
                },
                created(){
                    this.kunjungan.all(this);
                }
            });
        });
    </script>
@endpush
