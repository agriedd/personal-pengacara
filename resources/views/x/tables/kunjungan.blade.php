<div class="" v-if="kunjungan.notEmpty()">
    <v-table v-model="kunjungan.getData()" :pagination="kunjungan.option.table.pagination" :edd-data="kunjungan">
        <template v-slot:header>
            <tr class="position-sticky" style="top: 0px">
                <table-head id="created_at">
                    Tanggal
                </table-head>
                <table-head id="ip_address">
                    IP Address
                </table-head>
                <table-head id="uri" text="URL"></table-head>
                <table-head id="user_agent"> User Agent </table-head>
            </tr>
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
                <div class="small">
                    @{{ data.item.user_agent }}
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