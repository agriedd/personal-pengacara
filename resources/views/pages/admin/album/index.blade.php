{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'album.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    @component('x.headers.admin')
        Album
    @endcomponent
    @include('pages.admin.album.modal')
    @include('pages.admin.galeri.modal')
    @include('pages.public.galeri.modal')
    @component('x.breadcrumb.admin')
        <div class="breadcrumb-item active">
            Album
        </div>
    @endcomponent

    <div class="container">
        <div class="card clean">
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
        <div class="mb-3"></div>
    </div>
@endsection

@push('meta')
    <meta name="album_all" content="{{ route('album.index') }}">
    <meta name="album_insert" content="{{ route('album.store') }}">
    <meta name="album_delete" content="{{ route('album.destroy', ["album" => "#id"]) }}">
    <meta name="album_update" content="{{ route('album.update', ["album" => "#id"]) }}">

    <meta name="galeri_insert" content="{{ route('galeri.store') }}">
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
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
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
                    }
                },
                created(){
                    this.galeri
                        .pushAction('afterCloseModal', (key)=>{
                            if(key == 'tambah')
                                this.album.all(this);
                        });
                }
            });
        });
    </script>
@endpush
