{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'artikel.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection
@push('prependcontent')
    @include('pages.admin.artikel.modal')
@endpush

@section('content')
    @component('x.headers.admin')
        Artikel
    @endcomponent
    @component('x.breadcrumb.admin')
        <a href="{{ route('admin.artikel') }}" class="breadcrumb-item">
            Artikel
        </a>
        <div class="breadcrumb-item active">
            {{ $article->info->title ?? "Untitled" }}
        </div>
    @endcomponent
    <div class="container">
        <div class="row flex-md-row-reverse">
            <div class="col-lg-3 col-md-4">
                @component('x.menu.artikel')
                @endcomponent
            </div>
            <div class="col-md">
                @component('x.info.status-artikel')
                @endcomponent
                <div class="card clean">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div v-if="artikel.getSelected('info') && artikel.getSelected('info').status">
                                <div class="px-3 py-2 badge badge-pill font-weight-normal badge-success d-flex shadow-sm">
                                    <div class="pr-3">
                                        <svg class="bi bi-brightness-alt-high-fill" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4 11a4 4 0 1 1 8 0 .5.5 0 0 1-.5.5h-7A.5.5 0 0 1 4 11zm4-8a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zM4.464 7.464a.5.5 0 0 1-.707 0L2.343 6.05a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        Publik
                                    </div>
                                </div>
                            </div>
                            <div v-else>
                                <div class="px-3 py-2 badge badge-pill font-weight-normal badge-light d-flex shadow-sm">
                                    <div class="pr-3">
                                        <svg class="bi bi-eye-slash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                            <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        Draft
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-100 bg-gray-light img-md" style="height: 300px;" v-src:lg="artikel.data.cover">
                        </div>
                    </div>
                    <div class="card-body pb-1">
                        <h3>
                            @{{ artikel.getSelected('info').title }}
                        </h3>
                    </div>
                    <div class="card-body pt-0">
                        <div class="small d-flex text-muted">
                            <div>
                                <svg class="bi bi-calendar-date" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                                    <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                            <div class="pl-3">
                                @{{ artikel.getSelected('info').status ? artikel.getSelected('info').published_at : artikel.getSelected('created_at') }}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="body-article" v-html="artikel.getSelected('info').body"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
    </div>
@endsection

@push('meta')
    <meta name="artikel_find" content="{{ route('artikel.show', ['artikel' => $article->id]) }}">
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
            Vue.use(eddlibrary.Modal);
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
                    submit(t, e, form = 'update'){
                        if(form == 'update'){
                            let form = new FormData(e.target);
                            form.append('status', this.artikel.data.info.status ? '1' : '0');
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
                    konfirmasiHapus(type){
                        if(type == "artikel"){
                            this.artikel.openModal('hapus', this.artikel.getSelected());
                        }
                    },
                    update(type){
                        if(type == "artikel"){
                            this.artikel.openModal('ubah', this.artikel.getSelected());
                        }
                    }
                },
                created(){
                    this.artikel
						.pushAction('afterCloseModal', (key)=>{
							this.artikel.find(this, false);
						})
						.find(this, null, null, false);
                }
            });
        });
    </script>
@endpush
