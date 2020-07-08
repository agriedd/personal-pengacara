@php
    $model = $model ?? "navbar";
    $tambah = isset($tambah) ? $tambah : true;
@endphp
<div style="z-index: 0">
    <div class="card-body">
        <form action="" method="POST" v-on:submit.prevent="{{ $model }}.submit(getContext())">
            <div class="d-flex w-100">
                @if($tambah)
                    <div>
                        <button class="btn btn-sm btn-primary shadow-sm btn-rounded" type="button" v-on:click.prevent="{{ $model }}.openModal('tambah')">
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
                @endif
                <div class="px-3 w-100 d-sm-block d-none">
                    <input type="search" name="search" id="search" class="form-control bg-light rounded-pill px-3 py-2 w-100" placeholder="Temukan" v-model="{{ $model }}.option.filter.search">
                </div>
                <div class="ml-auto">
                    @isset($action)
                        {{ $action }}
                    @else
                        <button class="btn btn-link text-decoration-none" type="button">
                            <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>
                    @endisset
                </div>
            </div>
            <div class="d-sm-none d-block pt-3">
                <input type="search" name="search" id="search" class="form-control bg-light rounded-pill px-3 py-2 w-100" placeholder="Temukan" v-model="{{ $model }}.option.filter.search">
            </div>
        </form>
    </div>
</div>