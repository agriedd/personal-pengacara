<div class="card clean w-100 mb-3 text-light" style="background-size: cover; background-position: center">
    <div class="justify-middle">
        <div>
            <div class="img-lg bg-gray-light rounded w-100" style="background-image: url('{{ $artikel->cover->src_md }}')"></div>
        </div>
    </div>
    <div class="card-body" style="flex: 1 1 auto">
        <div class="h6 mb-0 text-dark">
            <a href="{{ $artikel->info_url_public }}" class="text-decoration-none text-dark">
                {{ $artikel->info->title }}
            </a>
        </div>
        <div class="text-muted text-justify small">
            {{ $artikel->info->description }}...
        </div>
    </div>
    <div class="card-body text-dark pt-0">
        <div class="d-flex justify-content-end">
            <a href="{{ $artikel->info_url_public }}" class="btn btn-sm btn-link text-decoration-none">
                <div class="d-flex">
                    <div class="pr-3">
                        Baca Selanjutnya
                    </div>
                    <div>
                        <svg class="bi bi-arrow-right-short" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.793 8 8.146 5.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5H11a.5.5 0 0 1 0 1H4.5A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>