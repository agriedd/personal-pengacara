<form action="" v-on:submit.prevent="submit('album', $event)">

    <div class="form-group">
        <label for="" class="text-gray small">
            Nama Album
        </label>
        <input type="text" class="form-control" required placeholder="Nama Album" v-model="album.data.nama" name="nama">
        @component('x.validate.error', [ 'model' => 'album', 'name' => 'nama' ])
        @endcomponent
    </div>
    <div class="form-group">
        <label for="" class="text-gray small">
            Keterangan Album
        </label>
        <textarea class="form-control" name="keterangan" id="keterangan" rows="5" placeholder="Keterangan tambahan album" required  v-model="album.data.keterangan"></textarea>
        @component('x.validate.error', [ 'model' => 'album', 'name' => 'keterangan' ])
        @endcomponent
    </div>

    <div class="form-group">
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-primary mx-1 px-5 py-2 shadow-sm" value="simpan">
                Simpan
            </button>
        </div>
    </div>
</form>