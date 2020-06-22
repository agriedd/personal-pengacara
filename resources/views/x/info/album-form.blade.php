<div class="">
    <div class="d-flex">
        <div class="px-3">
            <div class="justify-middle">
                <svg class="bi bi-folder" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                    <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                </svg>
            </div>
        </div>
        <div>
            <h6 class="text-dark">
                @{{ album.getSelected('nama') }}
            </h6>
            <div class="small text-muted">
                @{{ album.getSelected('keterangan') }}
            </div>
        </div>
    </div>
    <div class="py-3" v-if="album.getSelected('galeri') != null">
        <div v-if="album.getSelected('total_galeri') > 0" class="d-flex justify-content-center">
            <div class="pr-2" v-for="(item, i) in album.getSelected('galeri')" v-if="i < 3">
                <div class="img-md rounded shadow" v-src:xs="item.gambar"></div>
            </div>
            <div class="pr-2" v-if="album.getSelected('total_galeri') - 3 > 0">
                <div class="img-md rounded bg-gray-light">
                    <div class="justify-middle p-2">
                        <div class="text-muted text-center small">
                            dan @{{ album.getSelected('total_galeri') - 3 }} lainnya.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-else class="d-flex justify-content-center">
            <div class="img-md w-100 text-center">
                <div class="justify-middle text-muted small">
                    Album ini belum memiliki galeri
                </div>
            </div>
        </div>
    </div>
</div>