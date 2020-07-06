{{-- Halaman Daftar Artikel Untuk Pengunjung / Publik --}}

@extends('layouts.articles')

@section('content')
    <div>
        <div class="d-flex justify-content-center flex-md-row flex-column home-content">
            @include('x.nav.mini-sidebar-home')
            <div style="flex: 1 1 auto;" class="w-100">
                @component('x.breadcrumb.artikel')
                @endcomponent
                <div class="pb-5">
                    @include('x.headers.home-sm')
                    <div class="container-lg">
                        <div class="row mx-0 my-4 w-100">
                            <div class="col-12">
                                <div class="alert">
                                    <div class="d-flex">
                                        <div class="pr-4">
                                            <svg class="bi bi-newspaper" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M0 2A1.5 1.5 0 0 1 1.5.5h11A1.5 1.5 0 0 1 14 2v12a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 0 14V2zm1.5-.5A.5.5 0 0 0 1 2v12a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-.5-.5h-11z"/>
                                                <path fill-rule="evenodd" d="M15.5 3a.5.5 0 0 1 .5.5V14a1.5 1.5 0 0 1-1.5 1.5h-3v-1h3a.5.5 0 0 0 .5-.5V3.5a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                            </svg>
                                        </div>
                                        <h4 class="text-dark">
                                            Daftar Artikel
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            @if(count($artikel))
                                <div class="col-md mb-3">
                                    <div>
                                        @component('x.info.artikel-lg', ['artikel' => $artikel->first()])
                                        @endcomponent
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="position-sticky" style="top: 0px">
                                        @if(count($artikel))
                                            @foreach ($artikel as $index => $item)
                                                @component('x.info.artikel-sm', ['artikel' => $item])
                                                @endcomponent
                                            @endforeach
                                        @else
                                            <div class="justify-middle">
                                                <div class="h3 text-gray-light text-center font-weight-light">
                                                    Belum ada artikel lain
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-4 col-md-6 col-sm-8 mx-auto h-100">
                                    <div class="d-flex justify-content-center h-100">
                                        <div class="justify-middle">
                                            <div class="d-flex">
                                                <div class="pr-4">
                                                    <div class="justify-middle text-gray-light">
                                                        <svg class="bi bi-emoji-frown" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                            <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
                                                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="display-4 text-gray-light">
                                                    Belum ada artikel
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    @include('x.pages.home.footer')
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
                components: {notification: eddlibrary.Notification},
                mixins: [window.Mixins.Navbar, window.Mixins.Init, window.Mixins.Artikel],
                methods: {
                    like(id, value){
                        let form = new FormData();
                        form.append('vote', value ? 1 : -1);
                        this.vote = value;
                        this.artikel.update(this, form);
                    },
                    response(ctx, res){
                        let whitelist = ['boolean', 'number'];
                        if(whitelist.includes(typeof res.data.status) && res.data.status){
                            this.success("Terimakasih telah meluangkan waktu untuk membaca artikel ini");
                            this.disabled = true;
                        }
                    }
                },
                created(){
                    this.artikel
                        .pushAction('afterUpdate', this.response);
                }
            })
        })
    </script>
@endpush
