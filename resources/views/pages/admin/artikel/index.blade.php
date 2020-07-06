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
    <div class="container-lg">
        <div class="nav-tabs nav nav-2 text-muted">
            <a href="javascript:void(0)" class="nav-item nav-link" :class="{'active text-primary': artikel.isTab('semua')}" v-on:click.prevent="artikel.setTab('semua')">
                Semua
            </a>
            <a href="javascript:void(0)" class="nav-item nav-link" :class="{'active text-primary': artikel.isTab('publikasi')}" v-on:click.prevent="artikel.setTab('publikasi')">
                <div class="d-flex">
                    <div >
                        <svg class="bi bi-brightness-alt-high-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 11a4 4 0 1 1 8 0 .5.5 0 0 1-.5.5h-7A.5.5 0 0 1 4 11zm4-8a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zM4.464 7.464a.5.5 0 0 1-.707 0L2.343 6.05a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707z"/>
                        </svg>
                    </div>
                    <div class="pl-3">
                        <div class="justify-middle">
                            Publikasi
                        </div>
                    </div>
                </div>
            </a>
            <a href="javascript:void(0)" class="nav-item nav-link" :class="{'active text-primary': artikel.isTab('konsep')}" v-on:click.prevent="artikel.setTab('konsep')">
                <div class="d-flex">
                    <div>
                        <svg class="bi bi-lock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <rect width="11" height="9" x="2.5" y="7" rx="2"/>
                            <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                        </svg>
                    </div>
                    <div class="pl-3">
                        <div class="justify-middle">
                            Konsep
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
@push('appendcontent')
    <div class="card clean my-2 bg-light">
        @component('x.breadcrumb.admin')
            <div class="breadcrumb-item active">
                Artikel
            </div>
        @endcomponent
        <div class="container py-3">
            <div class="card clean">
                <transition-group name="move" tag="div" class="row m-0 flex-lg-row-reverse" mode="out-in">
                    <div v-if="artikel.getCollapse('filter')" class="col-lg-4 p-0 d-flex" key="filter">
                        <div class="w-100">
                            @include('x.filters.default', ['model' => 'artikel'])
                        </div>
                    </div>
                    <div class="col-lg p-0" key="table">
                        @component('x.forms.filter', [ 'name' => 'artikel', 'label' => "Artikel", 'model' => 'artikel' ])
                            @slot('action')
                                <button class="btn btn-link text-dark shadow-none" type="button" @click="artikel.toggleCollapse('filter')">
                                    <transition name="zoom" mode="out-in">
                                        <div :key="artikel.getCollapse('filter')">
                                            <div v-if="artikel.getCollapse('filter')">
                                                <svg class="bi bi-fullscreen-exit" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M5.5 0a.5.5 0 0 1 .5.5v4A1.5 1.5 0 0 1 4.5 6h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 10 4.5v-4a.5.5 0 0 1 .5-.5zM0 10.5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 6 11.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zm10 1a1.5 1.5 0 0 1 1.5-1.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4z"/>
                                                </svg>
                                            </div>
                                            <div v-else>
                                                <svg class="bi bi-fullscreen" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </transition>
                                </button>
                            @endslot
                        @endcomponent
                        <hr class="dropdown-divider m-0">
                        <transition mode="out-in" name="fly-up">
                            <div v-bind:key="artikel.tab()">
                                @include('x.tables.artikel')
                            </div>
                        </transition>
                    </div>
                    <div class="mb-3"></div>
                </transition-group>
            </div>
        </div>
    </div>
@endpush

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
                    },
                    filter(type, name){
                        this.artikel.saveFilter(this);
                    },
                    page(type, name, data){
                        this.artikel.option.filter.page = data.page;
                        this.artikel.all(this);
                    },
                    sort(type, name, data){
                        this.artikel.setSort(data.data, this)
                    }
                },
                created(){
                    this.artikel.setSort({
                            column: 'published_at',
                            asc: false,
                        })
                        .pushFilter(this, {status: 'semua'})
                        .pushAction('tabChanged', (name, artikel)=>{
                            artikel.setFilter('status', name)
                                .all(this);
                        })
                        .setTab('semua')
                        .all(this);
                }
            });
        });
    </script>
@endpush
