{{-- Halaman Daftar Artikel Untuk Pengunjung / Publik --}}

@extends('layouts.articles')

@section('content')
    @component('x.breadcrumb.artikel')
    @endcomponent
    <div class="container-lg pb-5">
        <div class="row my-4">
            <div class="col-12">
                <div class="alert">
                    <div class="d-flex">
                        <div class="pr-4">
                            <svg class="bi bi-folder" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                                <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                            </svg>
                        </div>
                        <h4 class="text-dark">
                            Daftar Artikel
                        </h4>
                    </div>
                </div>
            </div>
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
        </div>
        <div class="mb-3"></div>
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
