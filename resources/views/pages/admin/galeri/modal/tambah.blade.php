<div>
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <div class="pr-3">
                <div class="justify-middle">
                    <div class="rounded-pill bg-gray-light px-3 py-2">
                        <svg class="bi bi-image-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V13a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-1zm5-6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <div class="font-weight-light h4">
                    Form Tambah Galeri
                </div>
                <div class="small text-muted">
                    Formulir untuk menambah sebuah data galeri baru
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="galeri.closeModal('tambah', false)">
                Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
            </button>
        </div>
    </div>
    <hr class="divider row">
    @component('x.forms.tambah-galeri')
    @endcomponent
</div>