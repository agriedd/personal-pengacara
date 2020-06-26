{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'artikel.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    @component('x.headers.admin')
        Artikel
    @endcomponent
    @include('pages.admin.artikel.modal')
    @component('x.breadcrumb.admin')
        <div class="breadcrumb-item active">
            Artikel
        </div>
    @endcomponent
    <div class="container">
        <div class="card clean">
            
            @include('x.forms.filter', [ 'name' => 'artikel', 'label' => "Artikel", 'model' => 'artikel' ])

            <hr class="dropdown-divider m-0">

            @include('x.tables.artikel')
        </div>
        <div class="mb-3"></div>
    </div>
@endsection

@push('meta')
    <meta name="artikel_all" content="{{ route('artikel.index', ['all' => true]) }}">
    <meta name="artikel_insert" content="{{ route('artikel.store') }}">
    <meta name="artikel_delete" content="{{ route('artikel.destroy', ["artikel" => "#id"]) }}">
    <meta name="artikel_update" content="{{ route('artikel.update', ["artikel" => "#id"]) }}">
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
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.Artikel],
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
                data: {
                    editor: {
                        artikel: ClassicEditor,
                        config: {
                            artikel: {
                                toolbar: {
                                    items: [
                                        'heading',
                                        '|',
                                        'bold',
                                        'italic',
                                        'link',
                                        'bulletedList',
                                        'numberedList',
                                        '|',
                                        'indent',
                                        'outdent',
                                        '|',
                                        'blockQuote',
                                        'insertTable',
                                        'mediaEmbed',
                                        'undo',
                                        'redo'
                                    ]
                                },
                            }
                        }
                    },
                    time: 5000,
                },
                methods: {
                    submit(t, e, form = 'insert'){
                        if(form == 'insert'){
                            let form = new FormData(e.target);
                            form.append('status', this.artikel.data.info.status ? '1' : '0');
                            form.append('body', this.artikel.get('info').body);
                            form.append('all', true);
                            this.artikel.add(this, form);
                        }
                        if(form == 'update'){
                            let form = new FormData(e.target);
                            form.append('status', this.artikel.data.info.status ? '1' : '0');
                            form.append('all', true);
                            form.append('_method', 'PUT');
                            form.append('body', this.artikel.get('info').body);
                            this.artikel.update(this, form);
                        }
                    },
                    removeImage(type, name){
                        if(type == 'artikel'){
                            this.artikel.removeImage(name);
                            this.$refs[name].value = "";
                        }
                    },
                    konfirmasiHapus(type, index){
                        if(type == "artikel"){
                            this.artikel.openModal('hapus', this.artikel.getData(index));
                        }
                    },
                    update(type, index){
                        if(type == "artikel"){
                            this.artikel.openModal('ubah', this.artikel.getData(index));
                        }
                    }
                }
            });
        });
    </script>
@endpush
