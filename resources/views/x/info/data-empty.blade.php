<div class="card-body">
    @component('x.tip.default')
        @slot('tip', 'bg-warning tip-left-top text-warning')
        @slot('card', 'text-dark')
        @slot('width', '300px')
        <div class="small">
            Anda tidak memiliki artikel, anda dapat menambah artikel baru dengan menggunakan tombol aksi <strong>Tambah</strong> diatas
        </div>
    @endcomponent
</div>
<div class="card-body" style="height: 300px">
    <div class="justify-middle">
        <div class="h4 text-gray font-weight-light text-center">
            Data kosong
        </div>
    </div>
</div>