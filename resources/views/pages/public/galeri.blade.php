{{-- Halaman Daftar Artikel Untuk Pengunjung / Publik --}}

@extends('layouts.galeri')

@section('content')
    @include('pages.public.galeri.modal')
    <div>
        <div class="d-flex justify-content-center flex-md-row flex-column home-content">
            <div style="flex: 1 1 auto;" class="w-100">
                @include('x.headers.home-sm')
                <div class="container-lg pb-5">
                    <div class="justify-middle">
                        <div class="alert d-flex">
                            <h3 class="text-dark font-weight-light mb-0">
                                Galeri
                            </h3>
                        </div>
                    </div>
                    <div class="row flex-md-row-reverse">
                        @if ($galeri_pinned)
                            
                        <div class="col-lg-3 col-md-4 mb-3">
                            <div class="card clean">
                                <div>
                                    <img class="img-fluid card-img shadow" src="{{ $galeri_pinned->gambar->src_md }}" alt="{{ $galeri_pinned->judul }}">
                                </div>
                                <div class="card-body">
                                    <div class="position-absolute rounded-circle bg-light shadow m-2" style="top: 0px; right: 0px; height: 2.2rem; width: 2.2rem;">
                                        <div class="justify-middle">
                                            <div class="text-accent d-flex justify-content-center">
                                                <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="h5">
                                            {{ $galeri_pinned->judul }}
                                        </div>
                                        <div class="small text-muted">
                                            {{ $galeri_pinned->created_at->format('d M Y') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md" v-cloak>
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    @component('pages.public.galeri.list-album')
                                    @endcomponent
                                </div>
                            </div>
                        </div>

                        @else
                        <div class="col-12" style="min-height: calc(100vh - 250px)">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex text-gray-light">
                                        <div class="pr-3">
                                            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-image-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.648 6.646a.5.5 0 0 1 .577-.093l4.777 3.947V15a1 1 0 0 1-1 1h-14a1 1 0 0 1-1-1v-2l3.646-4.354a.5.5 0 0 1 .63-.062l2.66 2.773 3.71-4.71z"/>
                                                <path fill-rule="evenodd" d="M4.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="font-weight-light">
                                                Galeri kosong
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="row my-4">
                        
                    </div>
                    <div class="mb-3"></div>
                </div>
            </div>
        </div>
        @include('x.pages.home.footer')
    </div>
@endsection

@push('meta')
    <meta name="album_all" content="{{ route('album.index' ) }}">
    <meta name="album_find" content="{{ route('album.index', ['album' => '#id'] ) }}">
@endpush

@push('footer')
    <script src="{{ asset('/js/eddlibrary.umd.min.js') }}" defer></script>
    <script>
        window.addEventListener('load', ()=>{
            Vue.use(eddlibrary.Notification);
            Vue.use(eddlibrary.Plugins);
            var app = new Vue({
                el: "#app",
                data: {
                    time: 5000,
                    disabled: false,
                    vote: true,
                    fullscreen: false,
                },
                components: {notification: eddlibrary.Notification, modal: eddlibrary.Modal},
                mixins: [window.Mixins.Navbar, window.Mixins.Init, window.Mixins.Album, window.Mixins.Galeri],
                methods: {
                    showImage(ia, ig){
                        let album = this.album.getData(ia);
                        let galeri = album.galeri[ig];
                        this.album.setSelected(album);
                        this.galeri.setSelected(galeri);
                        this.galeri.openModal('preview');
                    },
                    selectGaleri(index){
                        let album = this.album.getSelected();
                        let galeri = album.galeri[index];
                        this.galeri.setSelected(galeri);
                    }
                },
                created(){
                    this.album.all(this);
                    this.galeri.pushAction('afterCloseModal', key => {
                        console.log(key);
                    });
                }
            })
        })
    </script>
@endpush
