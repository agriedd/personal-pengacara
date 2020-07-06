<form action="" v-on:submit.prevent="submit('bahan_hukum', $event, 'update')" enctype="multipart/form-data">
    <div class="form-group">
        <label for="" class="text-muted small">
            Berkas
        </label>
        <transition name="fly-up">
            <div class="d-flex list-group list-group-horizontal mb-2" style="max-width: 100%;" v-if="!bahan_hukum.hasFile('berkas')">
                <div class="list-group-item">
                    <div class="justify-middle">
                        <svg class="bi bi-file-earmark-text" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                            <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                </div>
                <div class="list-group-item w-100">
                    <a :href="bahan_hukum.getSelected('berkas').src" target="_blank" class="break-all h6">
                        @{{ bahan_hukum.getSelected('berkas').name }}
                    </a>
                    <div class="small text-muted">
                        @{{ bahan_hukum.getSelected('berkas').size | toMB }}MB
                    </div>
                </div>
            </div>
        </transition>
        <div class="d-flex list-group list-group-horizontal" style="max-width: 100%;">
            <div class="list-group-item" style="flex: 1 1 auto">
                <transition name="fly-up" mode="out-in">
                    <div :key="bahan_hukum.hasFile('berkas')">
                        <label for="berkas" class="d-block w-100 mb-0" style="cursor: pointer" v-if="!bahan_hukum.hasFile('berkas')">
                            <div class="text-muted d-flex">
                                <div class="pr-3">
                                    <svg class="bi bi-folder-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                                    </svg>
                                </div>
                                <div class="small">
                                    <div class="justify-middle">
                                        Pilih berkas lain...
                                    </div>
                                </div>
                            </div>
                        </label>
                        <div v-else>
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="pr-3">
                                            <div class="justify-middle">
                                                <svg class="bi bi-file" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pr-3">
                                            <h6 class="mb-0 font-weight-lighter text-primary justify-middle">
                                                <div>
                                                    @{{ bahan_hukum.getFile('berkas').size | toMB }}MB
                                                </div>
                                            </h6>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 break-all">
                                                @{{ bahan_hukum.getFile('berkas').name }}
                                            </h6>
                                            <div class="small text-muted">
                                                @{{ bahan_hukum.getFile('berkas').type }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
            <input type="file" ref="berkas" id="berkas" class="form-control d-none" name="berkas" v-on:change="selectFile($event, 'bahan_hukum', 'berkas')">
            <transition name="fly-up">
                <div class="list-group-item" v-if="bahan_hukum.hasFile('berkas')">
                    <div>
                        <button class="btn btn-dark shadow" type="button" @click.prevent="removeFile('bahan_hukum', 'berkas')">
                            <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                                <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </transition>
        </div>
        @component('x.validate.error', [ 'a' => 'bahan_hukum', 'name' => 'file' ])
        @endcomponent
    </div>
    
    <div class="form-group">
        <label for="" class="text-gray small">
            Judul Bahan Hukum
        </label>
        <input type="text" class="form-control" required placeholder="Judul Bahan Hukum" v-model="bahan_hukum.data.judul" name="judul">
        @component('x.validate.error', [ 'model' => 'bahan_hukum', 'name' => 'judul' ])
        @endcomponent
    </div>
    <div class="form-group">
        <label for="" class="text-gray small">
            Keterangan Bahan Hukum
        </label>
        <textarea class="form-control" name="keterangan" id="keterangan" rows="5" placeholder="Keterangan tambahan bahan hukum" required  v-model="bahan_hukum.data.keterangan"></textarea>
        @component('x.validate.error', [ 'model' => 'bahan_hukum', 'name' => 'keterangan' ])
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