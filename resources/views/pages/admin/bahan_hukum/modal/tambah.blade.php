<div>
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <div class="pr-3">
                <div class="justify-middle">
                    <div class="rounded-pill bg-gray-light px-4 py-2">
                        <svg class="bi bi-file-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8h-1v5a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5V1z"/>
                            <path fill-rule="evenodd" d="M13.5 1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <div class="font-weight-light h4">
                    Form Tambah Bahan Hukum
                </div>
                <div class="small text-muted">
                    Formulir untuk menambah data bahan hukum baru
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="bahan_hukum.closeModal('tambah', false)">
                Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
            </button>
        </div>
    </div>
    <hr class="divider row">
    @component('x.forms.tambah-bahan-hukum')
        
    @endcomponent
</div>