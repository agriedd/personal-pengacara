<form action="" v-on:submit.prevent="submit('user', $event, 'update-password')" enctype="multipart/form-data">
    <div>
        <div class="form-group">
            <label for="password" class="text-gray">
                Password
            </label>
            <input type="password" class="form-control" required placeholder="Password Lama" v-model="admin.data.password" name="password" id="password">
            @component('x.validate.error', [ 'model' => 'admin', 'name' => 'password' ])
            @endcomponent
        </div>
        <div class="form-group">
            <label for="password_baru" class="text-gray">
                Password Baru
            </label>
            <input type="password" class="form-control" required placeholder="Password Baru" v-model="admin.data.password_baru" name="password_baru" id="password_baru">
            @component('x.validate.error', [ 'model' => 'admin', 'name' => 'password_baru' ])
            @endcomponent
        </div>
        <div class="form-group">
            <label for="password_baru_confirmation" class="text-gray">
                Password Baru
            </label>
            <input type="password" class="form-control" required placeholder="Konfirmasi Password Baru" v-model="admin.data.password_baru_confirmation" name="password_baru_confirmation" id="password_baru_confirmation">
            @component('x.validate.error', [ 'model' => 'admin', 'name' => 'password_baru_confirmation' ])
            @endcomponent
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