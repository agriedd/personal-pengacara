<div class="card-body">
    <div>
        <div class="row m-0" v-if="galeri.notEmpty()">
            <div class="col-lg-3 col-md-4 col-6 d-flex p-1 flex-column" v-for="(item, i) in galeri.getData()" style="min-height: 300px;">
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
        </div>
        <div v-else-if="galeri.onSearch() && !galeri.notEmpty()">
            @include('x.info.search-empty', ['model' => 'galeri'])
        </div>
        <div v-else>
            @include('x.info.data-empty')
        </div>
    </div>
</div>