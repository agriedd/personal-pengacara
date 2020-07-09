<div class="col-lg-4 col-6 p-1">
    <a href="{{ route('admin.artikel') }}">
        @component('x.tip.default')
            @slot('tip', 'bg-gray-dark h-100')
            @slot('card', 'text-white')
            <div class="d-flex rounded py-2">
                <div class="small text-success">
                    <div class="justify-middle">
                        Total Artikel
                    </div>
                </div>
                <div class="pl-3">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2A1.5 1.5 0 0 1 1.5.5h11A1.5 1.5 0 0 1 14 2v12a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 0 14V2zm1.5-.5A.5.5 0 0 0 1 2v12a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-.5-.5h-11z"/>
                        <path fill-rule="evenodd" d="M15.5 3a.5.5 0 0 1 .5.5V14a1.5 1.5 0 0 1-1.5 1.5h-3v-1h3a.5.5 0 0 0 .5-.5V3.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                    </svg>
                </div>
            </div>
            <div class="d-flex">
                <div class="display-4" style="line-height: 1">
                    {{ $total_artikel }}
                </div>
                <div class="small text-light pl-2">
                    <div class="justify-middle justify-content-end">
                        artikel
                    </div>
                </div>
            </div>
        @endcomponent
    </a>
</div>
<div class="col-lg-4 col-6 p-1">
    <a href="{{ route('admin.album') }}">
        @component('x.tip.default')
            @slot('tip', 'bg-gray-dark h-100')
            @slot('card', 'text-white')
            <div class="d-flex rounded py-2">
                <div class="small text-info">
                    <div class="justify-middle">
                        Total Galeri
                    </div>
                </div>
                <div class="pl-3">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10z"/>
                        <path d="M10.648 8.646a.5.5 0 0 1 .577-.093l1.777 1.947V14h-12v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                        <path fill-rule="evenodd" d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                    </svg>
                </div>
            </div>
            <div class="d-flex">
                <div class="display-4" style="line-height: 1">
                    {{ $total_galeri }}
                </div>
                <div class="small text-light pl-2">
                    <div class="justify-middle justify-content-end">
                        galeri
                    </div>
                </div>
            </div>
        @endcomponent
    </a>
</div>
<div class="col-lg-4 col-12 p-1">
    <a href="{{ route('admin.bahan.hukum') }}">
        @component('x.tip.default')
            @slot('tip', 'bg-gray-dark h-100')
            @slot('card', 'text-white')
            <div class="d-flex rounded py-2">
                <div class="small text-warning">
                    <div class="justify-middle">
                        Total Berkas
                    </div>
                </div>
                <div class="pl-3">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                        <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                        <path fill-rule="evenodd" d="M5.646 8.854a.5.5 0 0 0 .708 0L8 7.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708z"/>
                        <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-1 0v4a.5.5 0 0 0 .5.5z"/>
                    </svg>
                </div>
            </div>
            <div class="d-flex">
                <div class="display-4" style="line-height: 1">
                    {{ $total_berkas }}
                </div>
                <div class="small text-light pl-2">
                    <div class="justify-middle justify-content-end">
                        berkas
                    </div>
                </div>
            </div>
        @endcomponent
    </a>
</div>