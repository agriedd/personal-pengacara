<div class="py-3 bg-dark" id="footer" style="max-width: 100%; overflow-x: hidden">
    <div>
        <div class="container py-5">
            <div class="position-relative">
                <img src="{{ asset('img/dots.svg') }}" alt="" style="position: absolute; bottom: -4rem; right: -4rem; height: 40px; opacity: .7; transform: rotateZ(75deg)">
            </div>
            <div class="justify-middle text-light">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="d-flex">
                            <div class="pr-3">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                            <div class="small">
                                Jl. Tirosa, RT 015 / RW 007, Kelurahan Mata Air, Kecamatan Kupang Tengah, Kabupaten Kupang
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="d-flex justify-content-center text-gray-light">
                {{ now()->format('Y') }} &copy; {{ env("APP_NAME") }}
            </div>
        </div>
    </div>
</div>