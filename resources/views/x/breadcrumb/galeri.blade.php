<div class="container-lg">
    <div class="d-flex py-3">
        @isset($back)
            <div class="pr-3">
                <div class="justify-middle">
                    <a href="{{ $back }}" class="btn btn-sm btn-light px-3 btn-rounded">
                        <div class="d-flex">
                            <div class="pr-3">
                                <div class="justify-middle">
                                    <svg class="bi bi-chevron-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                Kembali
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endisset
        <div>
            <div class="justify-middle">
                <div class="breadcrumb rounded-pill m-0 small">
                    <a href="{{ route('home') }}" class="breadcrumb-item">
                        Home
                    </a>
                    <a href="{{ route('home.galeri') }}" class="breadcrumb-item">
                        Galeri
                    </a>
                    {{ $slot ?? '' }}
                </div>
            </div>
        </div>
    </div>
</div>