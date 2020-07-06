<div class="row" v-cloak>
    <div class="col-12 mb-3" v-for="(item, ia) in album.getData()">
        <div class="d-flex mb-2">
            <div class="pr-3">
                <svg class="bi bi-folder" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                    <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                </svg>
            </div>
            <div>
                <h6 class="mb-0 text-muted">
                    @{{ item.nama }}
                </h6>
                <div class="small text-gray-light">
                    @{{ item.created_at }}
                </div>
            </div>
        </div>
        <div>
            <div class="row m-0">
                <div class="col-lg-3 col-6 p-1" v-for="(img, i) in item.galeri" style="height: 200px;" v-if="i < 3">
                    <div class="card border-0 shadow h-100 img-md w-100" v-src:sm="img.gambar" style="cursor: pointer" v-on:click="showImage(ia, i)">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-1" style="height: 200px;" v-if="item.total_galeri > 3">
                    <div class="card border-0 h-100 img-md w-100 bg-gray-lighten position-relative" v-src:sm="item.galeri[3].gambar" style="cursor: pointer; overflow: hidden;" v-on:click="showImage(ia, 3)">
                        <div class="card-body position-relative" style="z-index: 1">
                            <div class="justify-middle">
                                <div class="d-flex justify-content-center text-light">
                                    <h5 class="font-weight-light">
                                        Lainnya
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="h-100 w-100 position-absolute" style="background: rgba(0, 0, 0, .5)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>