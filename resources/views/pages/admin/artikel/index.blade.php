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
            
            @include('x.forms.filter', [ 'name' => 'artikel', 'label' => "Artikel" ])

            <hr class="dropdown-divider m-0">

            @include('x.tables.artikel')
        </div>
        <div class="mb-3"></div>
    </div>
@endsection

@push('meta')
    <meta name="artikel_all" content="{{ route('artikel.index') }}">
@endpush
@push('script')
    <script src="{{ asset('/js/eddlibrary.umd.min.js') }}" defer></script>
@endpush
@push('footer')
    <script>
        window.addEventListener('load', ()=>{
            var app = new Vue({
                el: "#app",
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.Artikel],
                components: { 'v-table': eddlibrary.Table2, 'table-head': eddlibrary.Table2Head, 'modal': eddlibrary.Modal },
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
                                baseFloatZIndex: 1040
                            }
                        }
                    }
                },
                methods: {
                    submit(t, e, v = null){

                    }
                }
            });
        });
    </script>
@endpush
