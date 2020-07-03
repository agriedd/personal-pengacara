
<div class="list-group-item border-bottom-0 user-select-none">
    <div class="d-flex justify-content-between">
        <div>
            <div class="justify-middle">
                <label class="small text-muted mb-0" for="tampilkan_album_kosong" style="cursor: pointer">
                    Tampilkan Album Kosong
                </label>
            </div>
        </div>
        <div class="text-dark">
            <input type="checkbox" class="custom-checkbox" id="tampilkan_album_kosong" v-model="album.option.filter.empty" @change="filter('album', 'empty', $event)">
        </div>
    </div>
</div>