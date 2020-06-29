<div class="alert shadow-sm bg-white text-white tip-left-top m-0">
    <div class="d-flex text-dark">
        <div class="pr-3">
            <div class="justify-middle">
                <svg class="bi bi-file-earmark-text" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                    <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </div>
        </div>
        <div>
            <a :href="bahan_hukum.getSelected('berkas').src" target="_blank" class="font-weight-light text-dark h4">
                @{{ bahan_hukum.getSelected('judul') }}
            </a>
            <div class="small text-muted text-justify">
                @{{ bahan_hukum.getSelected('keterangan') }}
            </div>
        </div>
    </div>
</div>