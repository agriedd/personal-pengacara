{{-- Halaman Daftar Artikel Untuk Pengunjung / Publik --}}

@extends('layouts.articles')

@section('content')
<div>
    <div class="d-flex justify-content-center flex-md-row flex-column home-content">
        @include('x.nav.mini-sidebar-home')
        <div style="flex: 1 1 auto;" class="w-100">
            @component('x.breadcrumb.artikel')
                <div class="breadcrumb-item active">
                    {{ $artikel->info->title }}
                </div>
            @endcomponent
            @include('x.headers.home-sm')
            <div class="container-lg pb-5">
                <div class="row flex-md-row-reverse">
                    <div class="col-lg-3 col-md-4">
                        @component('x.menu.artikel-publik', ['artikel' => $artikel])
                        @endcomponent
                    </div>
                    <div class="col-md pt-4">
                        <div class="card shadow-lg border-0">
                            <div>
                                <div class="w-100 bg-gray-light img-md rounded-top" style="height: 300px; background-image: url('{{ $artikel->cover->src_lg }}')">
                                </div>
                            </div>
                            <div class="card-body pb-1">
                                <h3>
                                    {{ $artikel->info->title }}
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
                                        {{ $artikel->info->published_at }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="body-article">
                                    {!! $artikel->info->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @component('pages.public.artikel.after-body')
                @endcomponent
                <div class="row my-4">
                    <div class="col-12">
                        <div class="alert pt-5">
                            <div class="d-flex pt-5">
                                <div class="pr-4">
                                    <svg class="bi bi-folder" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                                        <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                                    </svg>
                                </div>
                                <h4 class="text-dark">
                                    Artikel Lainnya
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md mb-3">
                        <div>
                            @component('x.info.artikel-lg', ['artikel' => $artikel])
                            @endcomponent
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="position-sticky" style="top: 0px">
                            @if(count($daftar_artikel))
                                @foreach ($daftar_artikel as $index => $item)
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
        </div>
    </div>
    @include('x.pages.home.footer')
</div>
@endsection

@push('meta')
    <meta name="artikel_update" content="{{ route('artikel.vote', ['artikel' => $artikel] ) }}">
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
