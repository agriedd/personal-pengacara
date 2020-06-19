<div>
    <div class="card-body">
        <form action="" method="POST" v-on:submit.prevent="artikel.submit(getContext())">
            <div class="d-flex w-100">
                <div class="pr-3">
                    <button class="btn btn-sm btn-primary shadow-sm btn-rounded" type="button" v-on:click.prevent="artikel.openModal('tambah')">
                        <div class="d-flex">
                            <div>
                                Tambah
                            </div>
                            <div class="pl-3">
                                <div class="justify-middle">
                                    <svg class="bi bi-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                        <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="px-3 w-100">
                    <input type="search" name="search" id="search" class="form-control bg-light rounded-pill px-3 py-2 w-100" placeholder="Temukan">
                </div>
                <div>
                    <button class="btn btn-link text-decoration-none" type="button">
                        <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>