{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'pengaturan.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@push('prependcontent')
    @include('pages.admin.user.modal')
@endpush
@section('content')
    @component('x.headers.admin')
        Pengaturan
    @endcomponent
@endsection
@push('appendcontent')
    <div class="card clean my-2 bg-light">
        @component('x.breadcrumb.admin')
            <div class="breadcrumb-item active">
                Pengaturan
            </div>
        @endcomponent
        <div class="container">
            
            <div class="card clean">
                <div class="row m-0">
                    <div class="col-md-4 px-0">
                        <div class="card-body">
                            @include('x.list.pengaturan')
                        </div>
                    </div>
                    <div class="d-md-none d-block col-12 px-0">
                        <div class="h-auto w-100 border-bottom"></div>
                    </div>
                    <div class="col-md-8 px-0">
                        <div class="d-flex h-100">
                            <div class="d-md-block d-none">
                                <div class="h-100 border-left"></div>
                            </div>
                            <transition style="flex: 1 1 auto" tag="div" name="fly-down" mode="out-in">
                                <div class="h-100" v-bind:key="pengaturan.tab()">
                                    <template v-if="pengaturan.isTab('user')">
                                        @include('x.tabs.pengaturan-user-info')
                                    </template>
                                    <template v-if="pengaturan.isTab('app')">
                                        @include('x.tabs.pengaturan-user-info')
                                    </template>
                                </div>
                            </transition>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3"></div>
        </div>
    </div>
@endpush

@push('meta')
    {{-- <meta name="kunjungan_all" content="{{ route('kunjungan.index') }}">
    <meta name="kunjungan_insert" content="{{ route('kunjungan.store') }}">
    <meta name="kunjungan_delete" content="{{ route('kunjungan.destroy', ["kunjungan" => "#id"]) }}">
    --}}
    <meta name="admin_update" content="{{ route('admin.update', ["admin" => "#id"]) }}">
    <meta name="admin_find" content="{{ route('admin.show', ["admin" => "#id"]) }}">
    <meta name="admin_id" content="{{ auth()->user()->id }}">
@endpush

@push('script')
    <script src="{{ asset('/js/eddlibrary.umd.min.js') }}" defer></script>
@endpush
@push('footer')
    <script>
        window.addEventListener('load', ()=>{
            Vue.use(eddlibrary.Notification);
            Vue.use(eddlibrary.Table2);
            window.app = new Vue({
                el: "#app",
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.User, window.Mixins.Admin, window.Mixins.Pengaturan ],
                components: { 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification, 'v-ripple': eddlibrary.Ripple },
                data: {
                    time: 5000,
                    ripples: {},
                },
                methods: {
                    submit(type, e, form = 'insert'){
                        if(type === 'user'){
                            if(form === 'update'){
                                let data = new FormData(e.target);
                                data.append('_method', 'PUT');
                                this.admin.update(this, data);
                            }
                        }
                    },
                    removeImage(type, name){},
                    konfirmasiHapus(type, index){},
                    update(type, index){},
                    insert(type, index){},
                    filter(type, name){
                    },
                    page(type, name, data){
                    },
                    sort(type, name, data){
                    },
                    toggleRipple(key){
                        if(this.ripples[key] == null)
                            this.$set(this.ripples, key, false);
                        this.ripples[key] = true;
                        setTimeout(()=>{
                            this.ripples[key] = false;
                        }, 500);
                    },
                    getRipple(key){
                        if(this.ripples[key] == null)
                            this.$set(this.ripples, key, false);
                        return this.ripples[key];
                    }
                },
                async created(){
                    await this.admin
                        .pushAction('afterCloseModal', key => {
                            this.admin.find(this)
                        })
                        .find(this);
                    this.pengaturan.setTab('user');
                    this.user.setTab('info')
                        .pushAction('afterOpenModal', (key)=>{
                            if(key == "ubah")
                                setTimeout(()=>{
                                    this.state = false;
                                }, 500);
                        });
                }
            });
        });
    </script>
@endpush
