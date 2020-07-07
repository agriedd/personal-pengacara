<form action="" v-on:submit.prevent="submit('user', $event, 'update')">
    <div class="row">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="" class="text-gray">
                    Nama
                </label>
        
                <input type="text" class="form-control" required placeholder="Nama User" v-model="user.data.info.nama" name="nama">
        
                @component('x.validate.error', [ 'model' => 'user', 'name' => 'nama' ])
                @endcomponent
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-dark mx-1 px-5 py-2 shadow-sm" value="simpan">
                Simpan
            </button>
        </div>
    </div>
</form>