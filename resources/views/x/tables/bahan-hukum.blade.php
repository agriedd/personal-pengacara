<div class="" v-if="bahan_hukum.notEmpty()">
    <v-table v-model="bahan_hukum.getData()" class="clean" :pagination="bahan_hukum.option.table.pagination" :edd-data="bahan_hukum">
        <template v-slot:header>
            <table-head unsorted id="cover"></table-head>
            <table-head id="nama" text="Judul"></table-head>
            <table-head id="downloads">
                <svg class="bi bi-cloud-download" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.887 5.2l-.964-.165A2.5 2.5 0 1 0 3.5 10H6v1H3.5a3.5 3.5 0 1 1 .59-6.95 5.002 5.002 0 1 1 9.804 1.98A2.501 2.501 0 0 1 13.5 11H10v-1h3.5a1.5 1.5 0 0 0 .237-2.981L12.7 6.854l.216-1.028a4 4 0 1 0-7.843-1.587l-.185.96z"/>
                    <path fill-rule="evenodd" d="M5 12.5a.5.5 0 0 1 .707 0L8 14.793l2.293-2.293a.5.5 0 1 1 .707.707l-2.646 2.646a.5.5 0 0 1-.708 0L5 13.207a.5.5 0 0 1 0-.707z"/>
                    <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 6z"/>
                </svg>
            </table-head>
            <table-head id="created_at">
                Dibuat pada
            </table-head>
            <table-head id="size">
                Ukuran
            </table-head>
            <table-head id="aksi" text="Aksi" unsorted></table-head>
        </template>
        <template v-slot:default="data">
            <td>
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="text-muted mb-2">
                            <div class="d-flex justify-content-center">
                                <svg class="bi bi-file-earmark-text" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                                    <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="justify-middle">
                                <div class="px-3 badge badge-pill badge-dark font-weight-normal py-2" v-if="data.item.berkas.extension">
                                    @{{ data.item.berkas.extension }}
                                </div>
                                <div class="px-3 badge badge-pill badge-light font-weight-normal py-2" v-else>
                                    tidak dikenal
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="h5 font-weight-light text-dark">
                    @{{ data.item.judul }}
                </div>
                <div class="small text-muted">
                    @{{ data.item.keterangan }}
                </div>
            </td>
            <td>
                <div>
                    @{{ data.item.berkas.downloads }}x
                </div>
                <div class="small text-muted">
                    diunduh
                </div>
            </td>
            <td>
                <div class="h6 text-dark">
                    @{{ data.item.created_at }}
                </div>
                <div class="small text-muted">  
                    @{{ data.item.created_at_diff }}
                </div>
            </td>
            <td>
                <div class="text-muted">
                    @{{ data.item.berkas.size | toMB }}MB
                </div>
            </td>
            <td>
                <div class="d-flex">
                    <a :href="data.item.berkas.src" target="_blank" class="btn btn-sm btn-light px-3 py-2 text-dark mr-1">
                        <div class="d-flex">
                            <div class="pr-3">
                                <svg class="bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"/>
                                    <path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"/>
                                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"/>
                                </svg>
                            </div>
                            <div>
                                Unduh
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-sm btn-rounded text-success" @click.prevent="update('bahan_hukum', data.index)">
                        <div class="d-flex">
                            <div class="pr-3">
                                <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                    <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                </svg>
                            </div>
                            <div>
                                Ubah
                            </div>
                        </div>
                    </button>
                    <button class="btn text-danger" @click.prevent="konfirmasiHapus('bahan_hukum', data.index)">
                        <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                </div>
            </td>
        </template>
    </v-table>
</div>
<div v-else-if="bahan_hukum.onSearch() && bahan_hukum.notLoading()">
    @component('x.info.search-empty', [ "model" => "bahan_hukum" ])
    @endcomponent
</div>
<div v-else-if="bahan_hukum.notLoading()">
    @component('x.info.data-empty')
    @endcomponent
</div>
<div v-else>
    @component('x.placeholders.table', ['row' => 10, 'col' => 6, 'height' => '100px'])
    @endcomponent
</div>