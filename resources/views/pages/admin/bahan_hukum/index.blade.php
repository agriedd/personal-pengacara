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
                
                @include('x.forms.filter', [ 'name' => 'bahan_hukum', 'label' => "Bahan Hukum", 'model' => 'bahan_hukum' ])
    
                <hr class="dropdown-divider m-0">
    
                @include('x.tables.bahan-hukum')
            </div>
            <div class="mb-3"></div>
        </div>
    </div>
@endpush

@push('meta')
    <meta name="bahan_hukum_all" content="{{ route('bahan-hukum.index', ['all' => true]) }}">
    <meta name="bahan_hukum_insert" content="{{ route('bahan-hukum.store') }}">
    {{-- <meta name="artikel_delete" content="{{ route('artikel.destroy', ["artikel" => "#id"]) }}"> --}}
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
                        if(type == "artikel"){
                            this.artikel.openModal('hapus', this.artikel.getData(index));
                        }
                    },
                    update(type, index){
                        if(type == "bahan_hukum"){
                            this.bahan_hukum.openModal('ubah', this.bahan_hukum.getData(index));
                        }
                    }
                }
            });
        });
    </script>
@endpush
