/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueLadda from 'vue-ladda'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

Vue.use(VueRouter)
Vue.component('vue-ladda', VueLadda)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('nav-component', require('./components/MyHeader').default);
Vue.component('nav2-component', require('./components/content').default);
Vue.component(
    'my-data-component',
    require('./components/data.vue').default
);



let home =  require('./components/home').default;
let about =  require('./components/about').default;




const routes = [
    { path: '/home', component: home },
    { path: '/saveData', component: about }
]
const router = new VueRouter({
    mode : "history",
    routes // short for `routes: routes`
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
