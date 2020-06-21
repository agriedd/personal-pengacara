{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'album.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    @component('x.headers.admin')
        Album
    @endcomponent
    
    @component('x.breadcrumb.admin')
        <div class="breadcrumb-item active">
            Album
        </div>
    @endcomponent

    <div class="container">
        <div class="card clean">
            {{-- @include('x.forms.filter', [ 'name' => 'artikel', 'label' => "Artikel", 'model' => 'artikel' ]) --}}
            <hr class="dropdown-divider m-0">
            {{-- @include('x.tables.album') --}}
        </div>
        <div class="mb-3"></div>
    </div>

    <div>
        <h4 class="font-weight-light">
            Panel Admin | Album 🔖
        </h4>
    </div>
    <div>
        Tambah Album
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="nama" id="nama" class="form-control form-control-sm">
            </div>
            @error('nama')
                <div class="alert alert-danger small">
                    @foreach ($errors->get('nama') as $error)
                        <div>
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @enderror
            <div>
                <button class="btn btn-sm btn-primary">
                    Kirim
                </button>
            </div>
        </form>
    </div>
    <div>
        List Album
        <ul>
            @forelse ($albums as $album)
                <li>
                    <a href="{{ route('admin.album.info', [ 'album' => $album->id ]) }}">
                        <div class="font-weight-bold">
                            {{ $album->nama }}
                        </div>
                    </a>
                    <div class="text-muted small">
                        {{ $album->keterangan }}
                    </div>
                    <div class="text-muted small">
                        {{ $album->total_galeri }} Galeri
                    </div>
                </li>
            @empty
                <li>
                    <div class="text-muted">
                        Belum ada gambar
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
@endsection

@push('meta')
    <meta name="album_all" content="{{ route('album.index') }}">
    {{-- <meta name="artikel_insert" content="{{ route('artikel.store') }}">
    <meta name="artikel_delete" content="{{ route('artikel.destroy', ["artikel" => "#id"]) }}">
    <meta name="artikel_update" content="{{ route('artikel.update', ["artikel" => "#id"]) }}"> --}}
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
                mixins: [window.Mixins.Init, window.Mixins.Navbar],
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
                data: {
                    time: 5000,
                },
                methods: {
                    submit(t, e, form = 'insert'){
                        if(form == 'insert'){
                            let form = new FormData(e.target);
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
