<div>
    <div class="d-flex justify-content-between">
        <div>
            <div class="font-weight-light h4">
                Form mengubah password
            </div>
            <div class="small text-muted">
                Masukan password lama Anda sebelum melanjutkan
            </div>
        </div>
        <div>
            <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="user.closeModal('password')">
                Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
            </button>
        </div>
    </div>
    <hr class="divider row">
    @component('x.forms.ubah-password-user')
    @endcomponent
</div>