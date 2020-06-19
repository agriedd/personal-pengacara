require('../app.js');
import Artikel from '../model/artikel'
import ClassicEditor from '@ckeditor/ckeditor5-build-classic/'
import CKEditor from '@ckeditor/ckeditor5-vue'

window.ClassicEditor = ClassicEditor
window.Mixins.Artikel = Artikel(window.Form)
window.Vue.use(CKEditor)