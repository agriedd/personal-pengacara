<form action="" v-on:submit.prevent="submit('artikel', $event)">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="" class="text-gray">
                    Judul
                </label>
                <input type="text" class="form-control" required placeholder="Judul Artikel" v-model="artikel.data.judul">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="" class="text-gray">
                    Cover
                </label>
                <div class="h-100 d-flex flex-column justify-content-center" v-if="!artikel.getImage('cover')">
                    <label for="foto" class="p-5 w-auto mx-auto" style="border: 2px dashed #0002; border-radius: 1rem">
                        <div class="text-center">
                            <svg class="bi bi-image" width="3em" height="3em" style="color: #0002" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
                <div v-else class="h-100 d-flex flex-column justify-content-center">
                    <div class="position-relative">
                        <button class="btn btn-sm shadow-lg btn-dark position-absolute rounded-pill px-3 py-2" type="button" style="top: 0px; right: 0px;" v-on:click="artikel.removeImage('cover')">
                            Hapus
                        </button>
                        <div class="p-4 d-flex">
                            <img :src="artikel.getImage('cover')" alt="Cover Artikel" class="shadow-lg mx-auto" style="max-height: 200px; height: auto; width: auto; max-width: 90%; border-radius: 1rem">
                        </div>
                    </div>
                </div>
                <input type="file" class="d-none" id="foto" name="foto" v-on:change="artikel.setImage($event, 'cover', getContext())" accept="image/*">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="" class="text-gray">
            Badan Artikel
        </label>
        <ckeditor v-model="artikel.data.body" :editor="editor.artikel" :config="editor.config.artikel"></ckeditor>
    </div>
    <div class="form-group">
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-success mx-1 px-5 py-2 shadow-sm" value="publikasi">
                Publikasi
            </button>
            <button class="btn btn-sm btn-dark mx-1 px-5 py-2 shadow-sm" value="simpan">
                Simpan
            </button>
        </div>
    </div>
</form>