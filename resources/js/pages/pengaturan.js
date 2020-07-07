require('../app.js')
import User from '../model/user'
import Admin from '../model/admin'
import Pengaturan from '../model/pengaturan'

window.Mixins.User = User(window.Form)
window.Mixins.Admin = Admin(window.Form)
window.Mixins.Pengaturan = Pengaturan(window.Form)
