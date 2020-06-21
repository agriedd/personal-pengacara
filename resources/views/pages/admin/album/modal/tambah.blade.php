<div>
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <div class="pr-3">
                <div class="justify-middle">
                    <div class="rounded-pill bg-gray-light px-3 py-2">
                        <svg class="bi bi-folder-fill" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <div class="font-weight-light h4">
                    Form Tambah Album
                </div>
                <div class="small text-muted">
                    Formulir untuk menambah sebuah data album baru
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="album.closeModal('tambah', false)">
                Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
            </button>
        </div>
    </div>
    <hr class="divider row">
    @component('x.forms.tambah-album')
    @endcomponent
</div>