require('../app.js');
import Album from '../model/album'
import Galeri from '../model/galeri'


window.Mixins.Album = Album(window.Form)
window.Mixins.Galeri = Galeri(window.Form)