<div class="card-body">
    <div>
        <div v-if="galeri.notEmpty()">
            <transition-group tag="div" name="move" class="row m-0">
                <div class="col-lg-3 col-md-4 col-6 d-flex p-1 flex-column" v-for="(item, i) in galeri.getData()" style="min-height: 300px;" :key="item.id">
                    <div class="h-100 w-100 bg-gray-light img-lg rounded shadow justify-content-between flex-column d-flex" v-src:md="item.gambar" style="flex: 1 1 auto" @click.self="showImage(i)">
                        <div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                
                            </div>
                            <div class="p-2">
                                <button class="btn btn-white shadow-sm rounded" @click.prevent="galeri.toggleList(getContext(), 'menu', item.id)" type="button">
                                    <div v-if="galeri.hasList('menu', item.id)">
                                        <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </div>
                                    <div v-else>
                                        <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-2" v-if="galeri.hasList('menu', item.id)">
                        <div class="mb-2">
                            <div class="font-weight-bold text-dark">
                                @{{ item.judul }}
                            </div>
                            <div class="small text-muted">
                                @{{ item.created_at }}
                            </div>
                        </div>
                        @if($album ?? false)
                            <div class="mb-2">
                                <div class="d-flex">
                                    <div class="pr-3">
                                        <svg class="bi bi-folder" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
                                            <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
                                        </svg>
                                    </div>
                                    <div class="font-weight-bold text-muted">
                                        @{{ item.album.nama }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-light" @click.prevent="konfirmasiHapus('galeri', i)">
                                <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                            <a class="btn btn-light" :href="item.gambar.src_lg" download>
                                <svg class="bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"/>
                                    <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"/>
                                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-5" key="pagination">
                    <div class="d-flex justify-content-end">
                        <edd-pagination :pagination="galeri.option.table.pagination" @page="page('galeri', 'list', $event)"></edd-pagination>
                    </div>
                </div>
            </transition-group>
        </div>
        <div v-else-if="galeri.onSearch() && !galeri.notEmpty()">
            @include('x.info.search-empty', ['model' => 'galeri'])
        </div>
        <div v-else>
            @include('x.info.data-empty')
        </div>
    </div>
</div>