<div class="card-body">
    <div>
        <div class="row" v-if="album.notEmpty()">
            <div class="col-lg-3 col-md-4 col-6 py-3 d-flex" v-for="(item, i) in album.getData()" style="min-height: 300px">
                <div class="h-100 w-100 bg-gray-light rounded shadow justify-middle">
                    <div class="d-flex justify-content-center">
                        <h6 class="text-white" style="text-shadow: 0rem 0rem .25rem #0005">
                            @{{ item.total_galeri }} Galeri
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>