<div>
    <div class="py-2">
        <div class="d-flex justify-content-between">
            <div>
                <div class="font-weight-light h4">
                    @lang('modal.konfirmasi_hapus')
                </div>
            </div>
            <div>
                <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="album.closeModal('hapus', false)">
                    Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
                </button>
            </div>
        </div>
    </div>
    <div>
        <div class="small alert text-muted">
            Apakah Anda yakin ingin menghapus album ini:
        </div>
        <div class="row alert-danger">
            <div class="p-3">
                @component('x.info.album')
                @endcomponent
                <div class="pt-3 small">
                    <div class="card clean tip-left-bottom bg-danger text-danger">
                        <div class="card-body text-light">
                            Data yang sudah dihapus tidak dapat dikembalikan. album akan terhapus beserta dengan semua galeri yang berhubungan dengan album ini.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="divider row mt-0">
    <div>
        <button class="btn btn-sm btn-danger btn-rounded" type="button" @click.prevent="album.remove(getContext())">
            <div class="d-flex">
                <div>
                    Hapus
                </div>
                <div class="pl-3">
                    <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </div>
            </div>
        </button>
    </div>
</div>