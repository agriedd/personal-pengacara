<div class="card-body">
    <div>
        <div class="row" v-if="album.notEmpty()">
            <div class="col-lg-3 col-md-4 col-sm-6 py-3 d-flex" v-for="(item, i) in album.getData()" style="min-height: 300px; cursor: pointer;" @click="showImage(i, 0)">
                <template v-if="item.total_galeri > 0">
                    <div class="h-100 w-100 bg-gray-light img-lg rounded shadow justify-middle overflow-hidden" v-for="(galeri, i) in item.galeri" v-if="i == 0" v-src:md="galeri.gambar">
                        <div class="h-100 w-100 position-absolute" style="background: rgba(0, 0, 0, .25)">

                        </div>
                        <div class="d-flex justify-content-center position-relative">
                            <h6 class="text-white" style="text-shadow: 0rem 0rem .25rem #000">
                                @{{ item.total_galeri }} Galeri
                            </h6>
                        </div>
                    </div>
                </template>
                <template v-else>
                    <div class="h-100 w-100 bg-gray-light img-lg rounded shadow justify-middle">
                        <div class="d-flex justify-content-center">
                            <h6 class="text-white" style="text-shadow: 0rem 0rem .25rem #0005">
                                @{{ item.total_galeri }} Galeri
                            </h6>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>