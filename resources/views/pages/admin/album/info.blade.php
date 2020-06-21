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
        <a href="{{ route('admin.album') }}" class="breadcrumb-item active">
            Album
        </a>
        <div class="breadcrumb-item active">
            {{ $album->nama }}
        </div>
    @endcomponent
    
@endsection


@push('meta')
    {{-- <meta name="album_all" content="{{ route('album.index') }}"> --}}
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
                        }
                    },
                    removeImage(type, name){
                        if(type == 'artikel'){
                            this.artikel.removeImage(name);
                            this.$refs[name].value = "";
                        }
                    },
                    konfirmasiHapus(type, index){
                        // if(type == "artikel"){
                            // this.artikel.openModal('hapus', this.artikel.getData(index));
                        // }
                    },
                    update(type, index){
                        // if(type == "artikel"){
                            // this.artikel.openModal('ubah', this.artikel.getData(index));
                        // }
                    }
                }
            });
        });
    </script>
@endpush


{{-- <form action="" method="POST" enctype="multipart/form-data">
    <div class="col-lg-4">
        @csrf
        <div class="form-group">
            <input type="file" class="form-control" name="foto" id="foto" required>
        </div>
        <div class="form-group">
            <input type="text" name="judul" id="judul" class="form-control form-control-sm" required placeholder="Judul">
        </div>
        <div class="form-group">
            <textarea name="keterangan" id="keterangan" rows="10" class="form-control" placeholder="Keterangan"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-primary">
                Tambah
            </button>
        </div>
    </div>
</form> --}}