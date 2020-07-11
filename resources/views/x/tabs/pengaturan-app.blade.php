<div class="card-body">
    <div class="d-flex h-100 w-100">
        <div class="d-flex flex-column w-100">
            <button class="list-group-item list-group-item-action" @click.prevent="resetLocalStorage()">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <div class="small text-dark font-weight-bold">
                            Hapus semua pengaturan
                        </div>
                        <div class="small text-muted">
                            Menghapus semua pengaturan yang tersimpan seperti filter dan sebagainya
                        </div>
                    </div>
                    <div class="pl-3">
                        <div class="justify-middle">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</div>