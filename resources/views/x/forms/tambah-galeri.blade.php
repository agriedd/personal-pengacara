<form action="" v-on:submit.prevent="submit('galeri', $event)">

    @component('x.info.album-form')
    @endcomponent

    <div class="form-group">
        <label for="" class="text-gray">
            Foto
        </label>
    </div>
    <div class="row mb-5">
        @include('x.forms.galeri-input-foto')
        @component('x.validate.error', [ 'model' => 'galeri', 'name' => 'foto' ])
            <div class="small">
                Ukuran maximum file 2MB
            </div>
        @endcomponent
    </div>

    <div class="form-group">
        <label for="" class="text-gray small">
            Keterangan 
        </label>
        <div class="text-gray-light small">Keterangan dibutuhkan agar mempermudah dalam pencarian.</div>
        <input type="text" class="form-control" required placeholder="Keterangan" v-model="galeri.data.judul" name="judul">
        @component('x.validate.error', [ 'model' => 'galeri', 'name' => 'judul' ])
        @endcomponent
    </div>


    <div class="form-group">
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-primary px-5 py-2 shadow-sm" value="simpan">
                Simpan
            </button>
        </div>
    </div>
</form>