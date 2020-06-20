<div class="alert shadow-sm bg-white text-white tip-left-top m-0">
    <div class="d-flex text-dark" v-if="artikel.getSelected('info')">
        <div class="pr-3">
            <div class="img-md bg-gray-light rounded" v-src:xs="artikel.getSelected('cover')"></div>
        </div>
        <div>
            <a :href="artikel.getSelected('info_url_admin')" target="_blank" class="font-weight-light text-dark h4">
                @{{ artikel.getSelected('info').title }}
            </a>
            <div class="mb-3"></div>
            <div class="small text-muted text-justify">
                @{{ artikel.getSelected('info').description }}...
            </div>
        </div>
    </div>
</div>