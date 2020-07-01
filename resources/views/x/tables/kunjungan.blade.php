<div class="" v-if="kunjungan.notEmpty()">
    <v-table v-model="kunjungan.getData()" :pagination="kunjungan.option.table.pagination" :edd-data="kunjungan" v-on:page="page('kunjungan', 'table', $event)" v-on:sort="sort('kunjungan', 'table', $event)" :sort="kunjungan.option.table.sort">
        <template v-slot:header>
            <table-head id="created_at">
                Tanggal
            </table-head>
            <table-head id="ip_address" option>
                IP Address
            </table-head>
            <table-head id="uri" text="URL"></table-head>
            <table-head id="user_agent"> User Agent </table-head>
        </template>
        <template v-slot:default="data">
            <td>
                <div class="small">
                    @{{ data.item.created_at }}
                </div>
            </td>
            <td>
                <div class="small">
                    @{{ data.item.ip_address }}
                </div>
            </td>
            <td>
                <div class="small">
                    @{{ data.item.uri }}
                </div>
            </td>
            <td>
                <div class="d-flex">
                    <div class="pr-3">
                        <svg class="bi bi-terminal-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm9.5 5.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm-6.354-.354L4.793 6.5 3.146 4.854a.5.5 0 1 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708z"/>
                        </svg>
                    </div>
                    <div class="small">
                        @{{ data.item.user_agent.os }}
                    </div>
                </div>
                <div class="d-flex">
                    <div class="pr-3">
                        <svg class="bi bi-cloud" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.887 7.2l-.964-.165A2.5 2.5 0 1 0 3.5 12h10a1.5 1.5 0 0 0 .237-2.981L12.7 8.854l.216-1.028a4 4 0 1 0-7.843-1.587l-.185.96zm9.084.341a5 5 0 0 0-9.88-1.492A3.5 3.5 0 1 0 3.5 13h9.999a2.5 2.5 0 0 0 .394-4.968c.033-.16.06-.324.077-.49z"/>
                        </svg>
                    </div>
                    <div class="small">
                        @{{ data.item.user_agent.browser }}
                    </div>
                </div>
            </td>
        </template>
    </v-table>
</div>
<div v-else-if="kunjungan.onSearch()">
    @component('x.info.search-empty', [ "model" => "kunjungan" ])
    @endcomponent
</div>
<div v-else>
    @component('x.info.data-empty')
    @endcomponent
</div>