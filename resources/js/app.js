/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

import Form from './edd/form';
import Navbar from './navbar';
import Init from './init'
import Axios from 'axios'
import src from './directives/src';

window.Vue = require('vue');
window.Form = Form;
window.axios = Axios

window.Vue.directive('src', src)
window.Vue.filter('no', (value, model)=>{
    let page = 1;
    let data_perpage = 10;

    if(model.option.table.pagination.current_page != null)
        page = model.option.table.pagination.current_page
    if(model.option.filter.limit != null)
        data_perpage = model.option.filter.limit

    return value + ((page - 1) * data_perpage) + 1
})
window.Vue.filter('toMB', (value, model)=>{
    value = value / 1000 / 1024
    return parseFloat(value.toFixed(2))
})

const init = {
    methods: {
        ...Init
    }
}

window.Mixins = { Navbar: Navbar(Form), Init: init };

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

