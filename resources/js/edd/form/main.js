import action from './action'
import collapse from './collapse'
import data from './data'
import error from './error'
import fetch from './fetch'
import filter from './filter'
import image from './image'
import loading from './loading'
import modal from './modal'
import response from './response'
import selected from './selected'
import store from './store'
import tab from './tab'

import add from './custom/add'
import all from './custom/all'
import find from './custom/find'
import remove from './custom/remove'
import update from './custom/update'
import list from './list'

export default e => {
    action(e)
    collapse(e)
    data(e)
    error(e)
    fetch(e)
    filter(e)
    image(e)
    loading(e)
    modal(e)
    response(e)
    selected(e)
    store(e)
    tab(e)
    list(e)

    add(e)
    all(e)
    find(e)
    remove(e)
    update(e)
}