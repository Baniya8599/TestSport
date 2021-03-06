/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window.Vue = require('vue');
window.axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import CategoryComponent from './components/CategoryComponent';
Vue.component('category-component', CategoryComponent);
/*import EditComponent from './components/EditComponent';
Vue.component('edit-component', EditComponent);*/
import ShowComponent from './components/ShowComponent';
Vue.component('show-component', ShowComponent);
import NewsComponent from './components/NewsComponent';
Vue.component('news-component', NewsComponent);
import HomeComponent from './components/HomeComponent';
Vue.component('home-component', HomeComponent);
import ReviewComponent from './components/ReviewComponent';
Vue.component('review-component', ReviewComponent);

/*font icon setting import*/
require('./font-awesome-insert');

// console.log(files);
/*import ShowMatchComponent from './components/ShowMatchComponent';
Vue.component('showmatch-component', ShowMatchComponent);*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
