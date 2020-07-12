{{-- preview --}}

<modal v-if="galeri.getModal('preview')" v-on:modalclose="galeri.closeModal('preview', false)" transition="fly-down" :size="fullscreen ? 'xl' : 'lg'">
	<template>
        <div class="d-flex justify-content-between">
            <div class="d-flex mb-2">
                <div class="pr-3">
                    <div class="justify-middle">
                        <svg class="bi bi-folder" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                            <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="font-weight-light h4 mb-0">
                        @{{ album.getSelected('nama') }}
                    </div>
                    <div class="small text-muted">
                        @{{ album.getSelected('created_at') }}
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-on:click="galeri.closeModal('preview', false)">
                    Tutup <i class="fa fa-times d-md-inline-block d-none"></i>
                </button>
                <button class="btn btn-light btn-sm rounded-pill px-3 py-2 text-muted" v-tooltip="fullscreen ? 'Keluar Fullscreen' : 'Fullscreen'" v-on:click="fullscreen = !fullscreen">
                    <div v-if="fullscreen">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-fullscreen-exit" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.5 0a.5.5 0 0 1 .5.5v4A1.5 1.5 0 0 1 4.5 6h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 10 4.5v-4a.5.5 0 0 1 .5-.5zM0 10.5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 6 11.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zm10 1a1.5 1.5 0 0 1 1.5-1.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4z"/>
                        </svg>
                    </div>
                    <div v-else>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-fullscreen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
        <hr class="divider row">
        <div class="d-flex flex-md-row flex-column">
            <div>

            </div>
            <div style="flex: 1 1 auto;" class="pr-3 mb-3">
                <div class="position-sticky" style="top: 0px; overflow: hidden;">
                    <div class="mb-3">
                        <div class="d-flex">
                            <div class="pr-3">
                                <div class="justify-middle">
                                    <a class="btn btn-success text-light shadow-sm" :href="galeri.getSelected('gambar').src_lg" download>
                                        <div class="d-flex">
                                            <div class="">
                                                <svg class="bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"/>
                                                    <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"/>
                                                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <transition name="fly-up" mode="out-in">
                                    <h5 class="font-weight-light mb-0" :key="galeri.getSelected('id')">
                                        @{{ galeri.getSelected('judul') }}
                                    </h5>
                                </transition>
                                <transition name="fly-up" mode="out-in">
                                    <div class="small text-gray-light" :key="galeri.getSelected('id')">
                                        @{{ galeri.getSelected('created_at') }}
                                    </div>
                                </transition>
                            </div>
                        </div>
                    </div>
                    <transition name="fly-left" mode="out-in">
                        <div class="d-flex justify-content-center" :key="galeri.getSelected('id')">
                            <img :src="galeri.getSelected('gambar').src_md" :key="galeri.getSelected('id')" :alt="galeri.getSelected('judul')" class="rounded" height="auto" width="100%">
                        </div>
                    </transition>
                </div>
            </div>
            <div class="h-auto d-flex flex-md-column flex-row" style="max-width: 100%; overflow-x: auto;">
                <div class="p-1 rounded d-md-block d-none" :class="[ {'bg-primary': galeri.getSelected('id') == item.id } ]" v-for="(item, i) in album.getSelected('galeri')">
                    <div class="img-lg rounded" v-src:md="item.gambar" style="cursor: pointer;" @click="selectGaleri(i)">

                    </div>
                </div>
                <div class="p-1 rounded d-md-none d-block" :class="[ {'bg-primary': galeri.getSelected('id') == item.id } ]" v-for="(item, i) in album.getSelected('galeri')">
                    <div class="img-sm rounded" v-src:md="item.gambar" style="cursor: pointer;" @click="selectGaleri(i)">

                    </div>
                </div>
            </div>
        </div>
    </template>
</modal>
