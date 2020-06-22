<div class="alert shadow-sm bg-white text-white tip-left-top m-0 w-100">
    <div class="d-flex text-dark">
        <div class="pr-3">
            <div class="justify-middle">
                <div class="img-md bg-gray-light rounded shadow" v-src:md=" galeri.getSelected('gambar')"></div>
            </div>
        </div>
        <div>
            <div class="justify-middle">
                <div>
                    <div class="font-weight-light text-dark h5">
                        @{{ galeri.getSelected('judul') }}
                    </div>
                    <div class="small text-muted text-justify">
                        @{{ galeri.getSelected('created_at') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>