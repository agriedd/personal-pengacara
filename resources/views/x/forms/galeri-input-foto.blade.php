@php

@endphp
<div class="d-flex justify-content-center w-100">
    <div class="h-100 d-flex flex-column justify-content-center" v-if="!galeri.getImage('foto')">
        <label for="foto" class="p-5 w-auto mx-auto" style="border: 2px dashed #0002; border-radius: 1rem">
            <div class="text-center text-gray-light">
                <svg class="bi bi-image" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
            <button class="btn btn-sm shadow btn-dark position-absolute rounded-pill px-3 py-2" type="button" style="bottom: -1.2rem; left: 50%; transform: translateX(-50%)" v-on:click="removeImage('galeri', 'foto')">
                Hapus
            </button>
            <div class="d-flex">
                <img :src="galeri.getImage('foto')" alt="Foto galeri" class="shadow rounded mx-auto" style="max-height: 300px; height: auto; max-width: 100%; width: auto;">
            </div>
        </div>
    </div>
    <input type="file" ref="foto" class="d-none" id="foto" name="foto" v-on:change="galeri.setImage($event, 'foto', getContext())" accept="image/*">
</div>