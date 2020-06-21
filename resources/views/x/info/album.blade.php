<div class="alert shadow-sm bg-white text-white tip-left-top m-0">
    <div class="d-flex text-dark">
        <div class="pr-3">
            <div class="justify-middle">
                <div class="img-sm bg-gray-light rounded" v-for="(img, i) in album.getSelected('galeri')" v-src:xs="img.gambar" v-if="i == 0"></div>
            </div>
        </div>
        <div>
            <a :href="album.getSelected('info_url_admin')" target="_blank" class="font-weight-light text-dark h4">
                @{{ album.getSelected('nama') }}
            </a>
            <div class="mb-3"></div>
            <div class="small text-muted text-justify">
                @{{ album.getSelected('keterangan') }}
            </div>
        </div>
    </div>
    <div class="text-dark">
        <div class="mt-3 small">
            Terdapat <strong>@{{ album.getSelected('total_galeri') }} galeri</strong> dalam album ini
        </div>
    </div>
</div>