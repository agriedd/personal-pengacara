<div>
    <div class="row mb-3">
        <div class="w-100 bg-gray-light img-md" style="height: 300px;" :style="{'background-image': `url('${artikel.getImage('cover')}')`}">
    
        </div>
    </div>
    <div class="px-md-3">
        <h3>
            @{{ artikel.get('judul') }}
        </h3>
        <div class="my-2 text-gray-light">
            Baru saja
        </div>
        <div v-html="artikel.get('body')" style="word-break: break-all"></div>
    </div>
</div>