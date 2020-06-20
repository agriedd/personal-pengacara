@php
    $update = isset($update) ? $update : false;
@endphp
<div class="d-flex justify-content-center w-100 bg-gray-light img-lg" style="height: 250px;"
    @if ($update)
        v-src:lg="artikel.data.cover"
    @endif
    >
    <div class="h-100 d-flex flex-column justify-content-center" v-if="!artikel.getImage('cover')">
        <label for="cover" class="p-5 w-auto mx-auto" style="border: 2px dashed #0002; border-radius: 1rem">
            <div class="text-center">
                <svg class="bi bi-image" width="1.5em" height="1.5em" style="{{ $update ? "color: #fff5" : "color: #0002" }}" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12z"/>
                    <path d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                    <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
            </div>
            <div class="text-muted small">
                Telusuri Foto..
            </div>
        </label>
    </div>
    <div v-else class="h-100 d-flex flex-column justify-content-center w-100">
        <div class="position-relative">
            <button class="btn btn-sm shadow btn-dark position-absolute rounded-pill px-3 py-2" type="button" style="bottom: -1.2rem; left: 50%; transform: translateX(-50%)" v-on:click="removeImage('artikel', 'cover')">
                Hapus
            </button>
            <div class="w-100 bg-gray-light img-md" style="height: 250px;" :style="{'background-image': `url('${artikel.getImage('cover')}')`}">
            </div>
        </div>
    </div>
    <input type="file" ref="cover" class="d-none" id="cover" name="cover" v-on:change="artikel.setImage($event, 'cover', getContext())" accept="image/*">
</div>