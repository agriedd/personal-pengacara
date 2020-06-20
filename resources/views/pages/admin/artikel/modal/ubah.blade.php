<div>
    <div class="d-flex justify-content-between">
        <div>
            <div class="font-weight-light h4">
                Form Ubah Artikel
            </div>
            <div class="small text-muted">
                Formulir untuk mengubah data artikel dengan id @{{ artikel.getSelected('id') }}
            </div>
        </div>
        <div>
            <button class="btn btn-sm btn-primary rounded-pill mx-1 px-3 py-2 shadow-sm" value="preview" type="button" @click="artikel.openModal('preview')">
                Preview
            </button>
            <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="artikel.closeModal('ubah')">
                Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
            </button>
        </div>
    </div>
    <hr class="divider row">
    @component('x.forms.ubah-artikel')
    @endcomponent
</div>