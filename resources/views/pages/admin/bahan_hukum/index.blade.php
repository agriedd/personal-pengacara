{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'bahan-hukum.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@push('prependcontent')
    @include('pages.admin.bahan_hukum.modal')
@endpush
@section('content')
    @component('x.headers.admin')
        Bahan Hukum
    @endcomponent
@endsection
@push('appendcontent')
    <div class="card clean my-2 bg-light">
        @component('x.breadcrumb.admin')
            <div class="breadcrumb-item active">
                Bahan Hukum
            </div>
        @endcomponent
        <div class="container">
            <div class="card clean">
                <transition-group name="move" tag="div" class="row m-0 flex-lg-row-reverse" mode="out-in">
                    <div v-if="bahan_hukum.getCollapse('filter')" class="col-lg-4 p-0 d-flex" key="filter">
                        <div class="w-100">
                            @include('x.filters.default', ['model' => 'bahan_hukum'])
                        </div>
                    </div>
                    <div class="col-lg p-0" key="table">
                        @component('x.forms.filter', [ 'name' => 'bahan_hukum', 'label' => "Bahan Hukum", 'model' => 'bahan_hukum' ])
                            @slot('action')
                                <button class="btn btn-link text-dark shadow-none" type="button" @click="bahan_hukum.toggleCollapse('filter')">
                                    <transition name="zoom" mode="out-in">
                                        <div :key="bahan_hukum.getCollapse('filter')">
                                            <div v-if="bahan_hukum.getCollapse('filter')">
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
            
                        @include('x.tables.bahan-hukum')
                    </div>
                </transition-group>
            </div>
            <div class="mb-3"></div>
        </div>
    </div>
@endpush

@push('meta')
    <meta name="bahan_hukum_all" content="{{ route('bahan-hukum.index', ['all' => true]) }}">
    <meta name="bahan_hukum_insert" content="{{ route('bahan-hukum.store') }}">
    <meta name="bahan_hukum_delete" content="{{ route('bahan-hukum.destroy', ["bahan_hukum" => "#id"]) }}">
    <meta name="bahan_hukum_update" content="{{ route('bahan-hukum.update', ["bahan_hukum" => "#id"]) }}">
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
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.BahanHukum],
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
                data: {
                    time: 5000,
                },
                methods: {
                    submit(t, e, form = 'insert'){
                        if(form == 'insert'){
                            let form = new FormData(e.target);
                            this.bahan_hukum.add(this, form);
                        }
                        if(form == 'update'){
                            let form = new FormData(e.target);
                            form.append('_method', 'PUT');
                            this.bahan_hukum.update(this, form);
                        }
                    },
                    selectFile(ev, type, name){
                        if(type == 'bahan_hukum')
                            this.bahan_hukum.setFile(ev, name, this);
                    },
                    removeFile(type, name){
                        if(type == 'bahan_hukum'){
                            this.bahan_hukum.removeFile(name);
                            this.$refs[name].value = "";
                        }
                    },
                    konfirmasiHapus(type, index){
                        if(type == "bahan_hukum"){
                            this.bahan_hukum.openModal('hapus', this.bahan_hukum.getData(index));
                        }
                    },
                    update(type, index){
                        if(type == "bahan_hukum"){
                            this.bahan_hukum.openModal('ubah', this.bahan_hukum.getData(index));
                        }
                    },
                    filter(type, name){
                        this.bahan_hukum.saveFilter(this);
                    }
                }
            });
        });
    </script>
@endpush
