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
    @component('x.breadcrumb.admin')
        <a href="{{ route('admin.album') }}" class="breadcrumb-item active">
            Album
        </a>
        <div class="breadcrumb-item active">
            {{ $album->nama }}
        </div>
    @endcomponent

    
    <div class="container">
        <div class="card clean">
            @component('x.forms.filter', [ 'name' => 'galeri', 'label' => "Galeri", 'model' => 'galeri' ])
                {{-- @slot('action')
                    @include('pages.admin.album.action.table')
                @endslot --}}
            @endcomponent
            <hr class="dropdown-divider m-0">
            @include('x.list.galeri')
        </div>
        <div class="mb-3"></div>
    </div>

@endsection

@push('meta')
    <meta name="album_find" content="{{ route('album.show', ['album' => $album->id]) }}">
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
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
                data: {
                    time: 5000,
                },
                methods: {
                    submit(type, e, form = 'insert'){
                        if(type == 'galeri'){
                            if(form == 'insert'){
                                let form = new FormData(e.target);
                                form.append('id_album', this.album.getSelected('id'));
                                this.galeri.add(this, form);
                            }
                            if(form == 'update'){
                                let form = new FormData(e.target);
                                form.append('_method', 'PUT');
                            }
                        }
                    },
                    removeImage(type, name){
                        if(type == 'artikel'){
                            this.artikel.removeImage(name);
                            this.$refs[name].value = "";
                        }
                    },
                    konfirmasiHapus(type, index){
                        if(type == "galeri"){
                            this.galeri.openModal('hapus', this.galeri.getData(index));
                        }
                    },
                    update(type, index){
                        // if(type == "artikel"){
                            // this.artikel.openModal('ubah', this.artikel.getData(index));
                        // }
                    },
                },
                async created(){
                    await this.album
						.pushAction('afterCloseModal', (key)=>{
							this.album.find(this, false);
						})
						.find(this, null, null, false);
                    this.galeri
                        .pushFilter(this, { id_album: this.album.getSelected('id') })
                        .all(this);
                }
            });
        });
    </script>
@endpush
