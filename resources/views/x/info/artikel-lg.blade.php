<div class="card clean h-100">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <div class="small text-muted justify-middle">
                    {{ $artikel->info->published_at_diff }}
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-link text-danger">
                    <svg class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </button>
                <button class="btn btn-link shadow-none text-dark" @click.prevent="navbar.toggleList(getContext(), 'artikel', {{ $artikel->id }})">
                    <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <transition name="fly-down">
        <div class="card-body pt-0 text-dark" v-show="navbar.hasList('artikel', {{ $artikel->id }})">
            @component('x.tip.default')
                @slot('tip', 'bg-dark text-dark tip-center-bottom')
                @slot('card', 'text-light')
                @component('x.info.share-artikel', [ 'artikel' => $artikel ])
                @endcomponent
            @endcomponent
        </div>
    </transition>
    <div class="card-img">
        <div class="img-lg bg-gray-light w-100" style="height: 250px; min-height: 250px; background-image: url('{{ $artikel->cover->src_lg }}')">
        </div>
    </div>
    <div class="card-body" style="flex: 1 0 auto">
        <div class="h4 text-dark">
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