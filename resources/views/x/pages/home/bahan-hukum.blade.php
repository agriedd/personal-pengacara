<div class="page-profil py-3 bg-gray-light" id="bahan-hukum">
    <div class="d-flex mb-2">
        <h2 class="font-weight-light mx-auto text-dark my-3 mb-5">
            Bahan Hukum
        </h2>
    </div>
    <div>
        <div class="container">
            <div class="position-relative">
                <img src="{{ asset('img/dots.svg') }}" alt="" style="position: absolute; bottom: -1rem; right: 0%; height: 2rem; opacity: .5; transform: rotateZ(20deg)">
            </div>
            <div class="justify-middle">
                <div class="row justify-content-center m-0">
                    @foreach ($bahanHukum as $item)
                        <div class="col-sm-6 p-1">
                            <div class="card clean w-100 mb-3 h-100 text-light" style="background-size: cover; background-position: center">
                                <div class="d-flex">
                                    <div>
                                        <div class="justify-middle">
                                            <div style="height: 50%; width: 1px;" class="bg-success"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-between" style="flex: 1 1 auto">
                                        <div class="card-body text-dark">
                                            <div class="d-flex mb-3">
                                                <div class="pr-3 text-gray-light">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                                                        <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                                                        <path fill-rule="evenodd" d="M5.646 9.146a.5.5 0 0 1 .708 0L8 10.793l1.646-1.647a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 0-.708z"/>
                                                        <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0v-4A.5.5 0 0 1 8 6z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="h5 font-weight-normal text-dark">
                                                        {{ $item->judul }}
                                                    </div>
                                                    <div class="small text-gray-light">
                                                        {{ $item->created_at->diffForHumans() }}
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="mt-0 row">
                                            <div class="text-muted text-justify small">
                                                {{ $item->keterangan }}
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ $item->url }}" target="_blank" class="btn btn-link text-dark text-decoration-none m-0">
                                                    <div class="d-flex">
                                                        <div class="pr-3">
                                                            <h5 class="font-weight-light mb-0">
                                                                Unduh
                                                            </h5>
                                                        </div>
                                                        <div>
                                                            <svg class="bi bi-download" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"/>
                                                                <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"/>
                                                                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div>
        </div>
    </div>
</div>