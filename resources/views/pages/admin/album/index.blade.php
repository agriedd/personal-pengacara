{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'album.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection
@push('prependcontent')
    @include('pages.admin.album.modal')
    @include('pages.admin.galeri.modal')
    @include('pages.public.galeri.modal')
@endpush

@section('content')
    @component('x.headers.admin')
        Album
    @endcomponent
    <div class="container-lg">
        <div class="nav-tabs nav nav-2">
            <a href="javascript:void(0)" class="nav-item nav-link" :class="{active: album.isTab('album')}" v-on:click.prevent="album.setTab('album')">
                Album
            </a>
            <a href="javascript:void(0)" class="nav-item nav-link" :class="{active: album.isTab('galeri')}" v-on:click.prevent="album.setTab('galeri')">
                Galeri
            </a>
        </div>
    </div>
@endsection
@push('appendcontent')
    <div class="card clean my-2 bg-light">
        @component('x.breadcrumb.admin')
            <div class="breadcrumb-item active">
                <transition name="fly-right" mode="out-in">
                    <div :key="album.tab()">
                        <div v-if="album.isTab('galeri')">
                            Galeri
                        </div>
                        <div v-else>
                            Album
                        </div>
                    </div>
                </transition>
            </div>
        @endcomponent
        <div class="container" key="table">
            <transition name="fly-down" mode="out-in">
                <div :key="album.tab('page')">

                    <div v-if="album.isTab('album')">
                        <div class="card clean">
                            
                            <transition-group name="move" tag="div" class="row m-0 flex-lg-row-reverse" mode="out-in">
                                <div v-if="album.getCollapse('filter')" class="col-lg-4 p-0 d-flex" key="filter">
                                    <div class="w-100">
                                        @component('x.filters.default', ['model' => 'album'])
                                            @include('pages.admin.album.filter')
                                        @endcomponent
                                    </div>
                                </div>
                                <div key="table" class="col-lg px-0">
                                    @component('x.forms.filter', [ 'name' => 'album', 'label' => "Album", 'model' => 'album' ])
                                        @slot('action')
                                            @include('pages.admin.album.action.table')
                                        @endslot
                                    @endcomponent
                                    <hr class="dropdown-divider m-0">
                                    <transition name="fly-up" mode="out-in">
                                        <div :key="album.getCollapse('table', true)">
                                            <div v-if="album.getCollapse('table', true)">
                                                @include('x.tables.album')
                                            </div>
                                            <div v-else>
                                                @include('x.list.album')
                                            </div>
                                        </div>
                                    </transition>
                                </div>
                            </transition-group>

                        </div>
                    </div>
                    <div v-else>
                        <div class="card clean">
                            @component('x.forms.filter', [ 'name' => 'galeri', 'label' => "Galeri", 'model' => 'galeri', 'tambah' => false ])
                            @endcomponent
                            <hr class="dropdown-divider m-0">
                            @include('x.list.galeri', ['album' => true])
                        </div>
                    </div>

                    <div class="mb-3"></div>
                </div>
            </transition>
        </div>
    </div>
    
@endpush

@push('meta')
    <meta name="album_all" content="{{ route('album.index') }}">
    <meta name="album_insert" content="{{ route('album.store') }}">
    <meta name="album_delete" content="{{ route('album.destroy', ["album" => "#id"]) }}">
    <meta name="album_update" content="{{ route('album.update', ["album" => "#id"]) }}">
    
    <meta name="galeri_all" content="{{ route('galeri.index') }}">
    <meta name="galeri_insert" content="{{ route('galeri.store') }}">
    <meta name="galeri_delete" content="{{ route('galeri.destroy', ["galeri" => "#id"]) }}">
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
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.Album, window.Mixins.Galeri],
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification, 'pagination': eddlibrary.pagination },
                data: {
                    time: 5000,
                },
                methods: {
                    submit(type, e, form = 'insert'){
                        if(type == 'album'){
                            if(form == 'insert'){
                                let form = new FormData(e.target);
                                this.album.add(this, form);
                            }
                            if(form == 'update'){
                                let form = new FormData(e.target);
                                form.append('_method', 'PUT');
                                this.album.update(this, form);
                            }
                        } else if(type == 'galeri'){
                            if(form == 'insert'){
                                let form = new FormData(e.target);
                                form.append('id_album', this.album.getSelected('id'));
                                this.galeri.add(this, form);
                            }
                        }
                    },
                    removeImage(type, name){
                        if(type == 'galeri'){
                            this.galeri.removeImage(name);
                            this.$refs[name].value = "";
                        }
                    },
                    konfirmasiHapus(type, index){
                        if(type == "album"){
                            this.album.openModal('hapus', this.album.getData(index));
                        }
                        if(type == "galeri"){
                            this.galeri.openModal('hapus', this.galeri.getData(index));
                        }
                    },
                    update(type, index){
                        if(type == "album"){
                            this.album.openModal('ubah', this.album.getData(index));
                        }
                    },
                    insert(type, index){
                        if(type == "galeri"){
                            this.album.setSelected(this.album.getData(index));
                            this.galeri.openModal('tambah');
                        }
                    },
                    showImage(ia, ig){
                        let album = this.album.getData(ia);
                        let galeri = album.galeri[ig];
                        this.album.setSelected(album);
                        this.galeri.setSelected(galeri);
                        this.galeri.openModal('preview');
                    },
                    selectGaleri(index){
                        let album = this.album.getSelected();
                        let galeri = album.galeri[index];
                        this.galeri.setSelected(galeri);
                    },
                    filter(type, name){
                        this.album.saveFilter(this);
                    },
                    page(type, name, data){
                        if(type == 'galeri'){
                            this.galeri.option.filter.page = data.page;
                            this.galeri.all(this);
                        }
                        if(type == 'album'){
                            this.album.option.filter.page = data.page;
                            this.album.all(this);
                        }
                    },
                    sort(type, name, data){
                        if(type == 'galeri'){
                            this.galeri.setSort(data.data, this)
                        }
                        if(type == 'album'){
                            this.album.setSort(data.data, this)
                        }
                    }
                },
                created(){
                    this.galeri
                        .pushAction('afterCloseModal', (key)=>{
                            if(key == 'tambah')
                                this.album.all(this);
                        })
                        .all(this);
                    this.album
                        .setTab('album')
                }
            });
        });
    </script>
@endpush
