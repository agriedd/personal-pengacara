<div class="landing" style="background-image: url('{{ asset('img/bg.jpg') }}')">
    <div class="text-left banner position-relative" style="z-index: 2">
        <img src="{{ asset('img/logo_full.png') }}" alt="" style="width: 100%" class="logo">
        <h3 class="">
            Selamat datang
        </h3>
        <div class="h5 font-weight-normal position-relative">
            <div>
                Di website pengacara Kupang - NTT,
                <strong>
                    BERNARD S. ANIN,SH.,MH
                </strong>
                & Rekan
            </div>
            <div>
                Kantor Advokat yang ber-alamat di Jl. Tirosa, RT 015 / RW 007, Kelurahan Mata Air, Kecamatan Kupang Tengah, Kabupaten Kupang
            </div>
        </div>
    </div>
    <transition name="fly-down">
        <a href="https://wa.me/6281238364640?text={{ urlencode("Saya ingin berkonsultasi dengan Anda.") }}" target="_blank" class="btn btn-lg rounded-pill action shadow text-dark" style="font-size: 1.25rem; z-index: 2" v-show="$scroll.y <= 100">
            KONSULTASI
        </a>
    </transition>
    <div class="backdrop d-md-none d-block position-absolute w-100 h-75" style="background: linear-gradient(0deg, #11102A, #11102A00); bottom: 0px; left: 0px">

    </div>
</div>
<div class="text-light p-3 d-flex" style="background-color: #11102A; min-height: 50vh;">
    <div>
        <div class="h-100 justify-content-center d-flex flex-column">
            <div class="row justify-content-center text-center">
                <div class="col-lg-5 col-md-8">
                    <h4 class="font-weight-light">
                        Menerima Permintaan Konsultasi Hukum, Pembuatan Draf/Dokumen Hukum (<i>Legal Drafting</i>) dan Pembuayan Pendapat Hukum Tertulis (<i>Legal Opinion</i>)
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>