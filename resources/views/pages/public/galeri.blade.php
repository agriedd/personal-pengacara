{{-- Halaman Daftar Artikel Untuk Pengunjung / Publik --}}

@extends('layouts.galeri')

@section('content')
    @include('pages.public.galeri.modal')
    {{-- <div class="bg-gray-light" style="min-height: 250px">
    </div> --}}
    <div class="container-lg pb-5">
        <div class="justify-middle">
            <div class="alert d-flex">
                <h3 class="text-dark font-weight-light mb-0">
                    Galeri
                </h3>
            </div>
        </div>
        <div class="row flex-md-row-reverse">
            <div class="col-lg-3 col-md-4">

            </div>
            <div class="col-md" v-cloak>
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        @component('pages.public.galeri.list-album')
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            
        </div>
        <div class="mb-3"></div>
    </div>
    @include('x.pages.home.footer')
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
            var app = new Vue({
                el: "#app",
                data: {
                    time: 5000,
                    disabled: false,
                    vote: true,
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
