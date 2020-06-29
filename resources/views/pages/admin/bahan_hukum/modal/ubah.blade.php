<div>
    <div class="d-flex justify-content-between">
        <div>
            <div class="font-weight-light h4">
                Form Ubah Bahan Hukum
            </div>
            <div class="small text-muted">
                Formulir untuk mengubah data bahan hukum dengan id @{{ bahan_hukum.getSelected('id') }}
            </div>
        </div>
        <div>
            <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="bahan_hukum.closeModal('ubah')">
                Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
            </button>
        </div>
    </div>
    <hr class="divider row">
    @component('x.forms.ubah-bahan-hukum')
    @endcomponent
</div>