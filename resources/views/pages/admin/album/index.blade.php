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
            <transition name="fly-left" mode="out-in">
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
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.Album],
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
                data: {
                    time: 5000,
                },
                methods: {
                    submit(t, e, form = 'insert'){
                        if(form == 'insert'){
                            let form = new FormData(e.target);
                            this.album.add(this, form);
                        }
                        if(form == 'update'){
                            let form = new FormData(e.target);
                            form.append('_method', 'PUT');
                            this.album.update(this, form);
                        }
                    },
                    removeImage(type, name){},
                    konfirmasiHapus(type, index){
                        if(type == "album"){
                            this.album.openModal('hapus', this.album.getData(index));
                        }
                    },
                    update(type, index){
                        if(type == "album"){
                            this.album.openModal('ubah', this.album.getData(index));
                        }
                    }
                }
            });
        });
    </script>
@endpush
