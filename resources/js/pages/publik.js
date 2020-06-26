require('../app.js');
import Artikel from '../model/artikel'
import Album from '../model/album'
import Galeri from '../model/galeri'

window.Mixins.Artikel = Artikel(window.Form)
window.Mixins.Album = Album(window.Form)
window.Mixins.Galeri = Galeri(window.Form)