<div class="">
    <v-table v-model="artikel.getData()" :pagination="artikel.option.table.pagination" :edd-data="artikel">
        <template v-slot:header>
            <tr class="position-sticky" style="top: 0px">
                <table-head unsorted id="cover"></table-head>
                <table-head id="nama" text="Judul"></table-head>
                <table-head id="views">
                    <svg class="bi bi-eye" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                        <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                </table-head>
                <table-head id="created_at">
                    Dibuat pada
                </table-head>
                <table-head id="created_at">
                    Nilai
                </table-head>
                <table-head id="status" text="Status"></table-head>
                <table-head id="aksi" text="Aksi" unsorted></table-head>
            </tr>
        </template>
        <template v-slot:default="data">
            <td>
                <div class="d-flex justify-content-end">
                    <div class="img-md bg-gray-light rounded"></div>
                </div>
            </td>
            <td style="max-width: 200px">
                <a :href="data.item.info_url_admin" target="_blank" class="font-weight-bold h5">
                    @{{ data.item.info.title }}
                </a>
                <div class="small text-muted text-justify">
                    @{{ data.item.info.description }}...
                </div>
                <div class="mb-2"></div>
            </td>
            <td>
                <div class="d-flex">
                    <h4>
                        @{{ data.item.views }}
                    </h4>
                    <div class="small pl-1">
                        <div class="justify-middle">
                            kali
                        </div>
                    </div>
                </div>
                <div class="small">
                    dilihat
                </div>
            </td>
            <td>
                <div class="small">
                    @{{ data.item.created_at_diff }}
                </div>
            </td>
            <td>
                <div class="h4">
                    @{{ data.item.rating }}
                </div>
            </td>
            <td>
                <div v-if="data.item.info.status">
                    <div class="px-3 py-2 badge badge-pill font-weight-normal badge-success d-flex shadow-sm">
                        <div class="pr-3">
                            <svg class="bi bi-brightness-alt-high-fill" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 11a4 4 0 1 1 8 0 .5.5 0 0 1-.5.5h-7A.5.5 0 0 1 4 11zm4-8a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zM4.464 7.464a.5.5 0 0 1-.707 0L2.343 6.05a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707z"/>
                            </svg>
                        </div>
                        <div>
                            Publik
                        </div>
                    </div>
                </div>
                <div v-else>
                    <div class="px-3 py-2 badge badge-pill font-weight-normal badge-light d-flex shadow-sm">
                        <div class="pr-3">
                            <svg class="bi bi-eye-slash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                            </svg>
                        </div>
                        <div>
                            Draft
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="d-flex">
                    <button class="btn btn-sm btn-rounded text-success">
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
                    <button class="btn text-danger">
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