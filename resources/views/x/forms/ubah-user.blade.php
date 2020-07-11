<form action="" v-on:submit.prevent="submit('user', $event, 'update')" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="justify-middle">
                <div class="text-gray-light d-flex justify-content-center">
                    Foto disini
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama" class="text-gray">
                    Nama
                </label>
                <input type="text" class="form-control" required placeholder="Nama Lengkap" v-model="admin.data.info.nama" name="nama" id="nama">
                @component('x.validate.error', [ 'model' => 'admin', 'name' => 'nama' ])
                @endcomponent
            </div>
            <div class="form-group">
                <label for="" class="text-gray">
                    Jenis Kelamin
                </label>
                <div class="d-flex py-2">
                    <div class="custom-control custom-radio pr-3">
                        <input type="radio" class="custom-control-input" name="jenis_kelamin" id="laki_laki" value="l" v-model="admin.data.info.info.jenis_kelamin">
                        <label for="laki_laki" class="custom-control-label small text-muted">
                            <div class="justify-middle">
                                Laki Laki
                            </div>
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="jenis_kelamin" id="perempuan" value="p" v-model="admin.data.info.info.jenis_kelamin">
                        <label for="perempuan" class="custom-control-label small text-muted">
                            <div class="justify-middle">
                                Perempuan
                            </div>
                        </label>
                    </div>
                </div>
                @component('x.validate.error', [ 'model' => 'admin', 'name' => 'jenis_kelamin' ])
                @endcomponent
            </div>
            <div class="form-group">
                <div class="row m-0">
                    <div class="col-sm-6 px-0 pr-1">
                        <label for="tempat_lahir" class="text-gray">
                            Tempat Lahir
                        </label>
                        <input type="text" id="tempat_lahir" class="form-control" required placeholder="Tempat Lahir" v-model="admin.data.info.info.tempat_lahir" name="tempat_lahir">
                        @component('x.validate.error', [ 'model' => 'admin', 'name' => 'tempat_lahir' ])
                        @endcomponent
                    </div>
                    <div class="col-sm-6 px-0 pl-1">
                        <label for="tanggal_lahir" class="text-gray">
                            Tanggal Lahir
                        </label>
                        <input type="date" id="tanggal_lahir" class="form-control" required v-model="admin.data.info.info.tanggal_lahir" name="tanggal_lahir">
                        @component('x.validate.error', [ 'model' => 'admin', 'name' => 'tanggal_lahir' ])
                        @endcomponent
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="agama" class="text-gray">
                    Agama
                </label>
                <select name="agama" id="agama" class="custom-select" v-model="admin.data.info.info.agama">
                    <option value="">Pilih Agama</option>
                    <option :value="item" v-for="item in [ 'Kristen Protestan', 'Katolik', 'Islam', 'Hindu', 'Budha', 'Lainnya' ]">@{{item}}</option>
                </select>
                @component('x.validate.error', [ 'model' => 'admin', 'name' => 'agama' ])
                @endcomponent
            </div>
            <div class="form-group">
                <label for="alamat" class="text-gray">
                    Alamat
                </label>
                <input type="text" id="alamat" class="form-control" required placeholder="Alamat" v-model="admin.data.info.info.alamat" name="alamat">
                @component('x.validate.error', [ 'model' => 'admin', 'name' => 'alamat' ])
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