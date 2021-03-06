<div class="container">
    <div class="d-flex py-0">
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
                <div class="breadcrumb rounded-pill m-0 small px-2 py-1">
                    <a href="{{ route('admin') }}" class="breadcrumb-item">
                        Panel Admin
                    </a>
                    {{ $slot ?? '' }}
                </div>
            </div>
        </div>
    </div>
</div>