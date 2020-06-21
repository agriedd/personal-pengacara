<div class="py-3 d-flex justify-content-end" v-if="artikel.getSelected('info') && artikel.getSelected('info').status">
    <div class="col-lg-4 col-md-6 col-sm-8 px-0">
        @component('x.tip.default')
            @slot('tip', 'bg-success text-success tip-right-bottom')
            @slot('card', 'text-light')
            <div class="small">
                Artikel ini berstatus <strong>Dipublikasi</strong> sehingga dapat dilihat oleh siapa saja, perubahan pada artikel mungkin mempengaruhi pembaca.
            </div>
        @endcomponent
    </div>
</div>
<div class="py-3 d-flex justify-content-end" v-else>
    <div class="col-lg-4 col-md-6 col-sm-8 px-0">
        @component('x.tip.default')
            @slot('tip', 'bg-dark text-dark tip-right-bottom')
            @slot('card', 'text-light')
            <div class="small">
                Artikel ini berstatus <strong>Konsep</strong> dan hanya dapat dilihat oleh Anda saja.
            </div>
        @endcomponent
    </div>
</div>