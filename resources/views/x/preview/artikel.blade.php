<div>
    <div class="row mb-3">
        <div class="w-100 bg-gray-light img-md" style="height: 300px;" :style="{'background-image': `url('${artikel.getImage('cover')}')`}" v-if="artikel.getImage('cover')">
        </div>
        <div class="w-100 bg-gray-light img-md" style="height: 300px;" v-else v-src:lg="artikel.data.cover">
        </div>
    </div>
    <div class="px-md-3">
        <h3>
            @{{ artikel.get('info').title }}
        </h3>
        <div class="my-2 text-gray-light">
            Baru saja
        </div>
        <div class="body-article" v-html="artikel.get('info').body" style="word-break: break-all"></div>
    </div>
</div>