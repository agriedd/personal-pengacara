<div class="" v-if="album.notEmpty()">
    <v-table v-model="album.getData()" :pagination="album.option.table.pagination" :edd-data="album">
        <template v-slot:header>
            <table-head id="id"></table-head>
            <table-head id="nama" text="Nama"></table-head>
            <table-head id="galeri">
                Galeri
            </table-head>
            <table-head id="created_at">
                Tanggal buat
            </table-head>
            <table-head id="aksi" text="Aksi" unsorted></table-head>
        </template>
        <template v-slot:default="data">
            <td>
                <div class="small">
                    @{{ data.index | no( album ) }}
                </div>
            </td>
            <td>
                <div class="d-flex">
                    <a :href="data.item.info_url_admin" class="">
                        <div class="h6">
                            @{{ data.item.nama }}
                        </div>
                        <div class="small text-muted">
                            @{{ data.item.keterangan }}
                        </div>
                    </a>
                </div>
            </td>
            <td>
                <div class="d-flex">
                    <div class="img-sm bg-gray-light rounded shadow-sm" v-for="(img, i) in data.item.galeri" v-if="i < 3" v-src:xs="img.gambar" @click="showImage(data.index, i)"></div>
                    <a href="javascript:void(0)" @click.prevent="insert('galeri', data.index)" class="img-sm bg-gray-light rounded shadow-sm text-dark d-flex justify-content-center" title="Tambah galeri">
                        <div class="justify-middle">
                            <svg class="bi bi-file-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8h-1v5a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5V1z"/>
                                <path fill-rule="evenodd" d="M13.5 1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V1.5a.5.5 0 0 1 .5-.5z"/>
                                <path fill-rule="evenodd" d="M13 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="mt-2">
                    <h6>
                        @{{ data.item.total_galeri }} Galeri
                    </h6>
                </div>
            </td>
            <td>
                <div>
                    @{{ data.item.created_at }}
                </div>
                <div class="text-muted small">
                    @{{ data.item.created_at_diff }}
                </div>
            </td>
            <td>
                <div class="d-flex">
                    <button class="btn btn-sm btn-rounded text-success" @click.prevent="update('album', data.index)">
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
                    <button class="btn text-danger" @click.prevent="konfirmasiHapus('album', data.index)">
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
<div v-else-if="album.onSearch()">
    @component('x.info.search-empty', [ "model" => "album" ])
    @endcomponent
</div>
<div v-else>
    @component('x.info.data-empty')
    @endcomponent
</div>