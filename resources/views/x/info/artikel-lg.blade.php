<div class="card clean h-100">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <div class="small text-muted justify-middle">
                    {{ $artikel->info->published_at_diff }}
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-link text-accent">
                    <div class="d-flex">
                        <div class="pr-2 small">
                            <div class="justify-middle">
                                {{ $artikel->rating }}
                            </div>
                        </div>
                        <div>
                            <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </div>
                    </div>
                </button>
                <button class="btn btn-link shadow-none text-dark" @click.prevent="navbar.toggleList(getContext(), 'artikel', {{ $artikel->id }})">
                    <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div v-cloak>
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
    </div>
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