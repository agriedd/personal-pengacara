<form action="" v-on:submit.prevent="submit('artikel', $event)">
    <div class="form-group">
        <label for="" class="text-gray">
            Cover
        </label>
    </div>
    <div class="row mb-5">
        @include('x.forms.artikel-input-cover')
        @component('x.validate.error', [ 'model' => 'artikel', 'name' => 'cover' ])
            <div class="small">
                Ukuran maximum file 2MB
            </div>
        @endcomponent
    </div>
    <div class="form-group">
        <label for="" class="text-gray">
            Judul
        </label>

        <input type="text" class="form-control" required placeholder="Judul Artikel" v-model="artikel.data.info.title" name="judul">

        @component('x.validate.error', [ 'model' => 'artikel', 'name' => 'judul' ])
        @endcomponent
    </div>
    <div class="form-group">
        <label for="" class="text-gray">
            Badan Artikel
        </label>

        <ckeditor v-model="artikel.data.info.body" :editor="editor.artikel" :config="editor.config.artikel"></ckeditor>

        @component('x.validate.error', [ 'model' => 'artikel', 'name' => 'body' ])
        @endcomponent
    </div>
    <div class="form-group">
        <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-success mx-1 px-5 py-2 shadow-sm" value="publikasi">
                Publikasi
            </button>
            <button class="btn btn-sm btn-dark mx-1 px-5 py-2 shadow-sm" value="simpan">
                Simpan
            </button>
        </div>
    </div>
</form>