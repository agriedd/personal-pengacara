<div>
    <div class="d-flex justify-content-between">
        <div>
            <div class="font-weight-light h4">
                Form Ubah Data User
            </div>
            <div class="small text-muted">
                Formulir untuk mengubah data user dengan id @{{ admin.getSelected('id') }}
            </div>
        </div>
        <div>
            <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="user.closeModal('ubah')">
                Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
            </button>
        </div>
    </div>
    <hr class="divider row">
    @component('x.forms.ubah-user')
    @endcomponent
</div>