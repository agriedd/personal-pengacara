@if(count($artikel))
    <div class="page-profil py-3 bg-light" id="artikel">
        <div class="d-flex mb-2">
            <h2 class="font-weight-light mx-auto text-dark my-3 mb-5">
                Artikel
            </h2>
        </div>
        <div>
            <div class="container">
                <div class="position-relative">
                    <img src="{{ asset('img/dots.svg') }}" alt="" style="position: absolute; bottom: 0rem; left: -4rem; height: 30px; opacity: .7; transform: rotateZ(0deg)">
                </div>
                <div class="justify-middle">
                    @if(count($artikel))
                        <div class="row justify-content-center">
                            <div class="col-md-6 pb-3">
                                @component('x.info.artikel-lg', ['artikel' => $artikel->first()])
                                @endcomponent
                            </div>
                            <div class="col-md-6">
                                @if(count($artikel) > 1)
                                    @foreach ($artikel as $index => $item)
                                        @if($index != 0)
                                            @component('x.info.artikel-md', ['artikel' => $item])
                                            @endcomponent
                                        @endif
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
                        <div class="row">
                            <div class="col-12">
                                <div class="justify-content-center">
                                    <h3 class="text-center text-gray-light font-weight-light">
                                        Belum ada artikel.
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif