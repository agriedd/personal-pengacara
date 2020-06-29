<div>
    <div class="d-flex justify-content-between">
        <div>
            <div class="font-weight-light h4">
                Preview Artikel
            </div>
        </div>
        <div>
            <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="artikel.closeModal('preview', false)">
                Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
            </button>
        </div>
    </div>
    <hr class="divider row mb-0">
    @component('x.preview.artikel')
    @endcomponent
</div>