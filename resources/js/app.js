/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('new-collection', require('./components/NewCollectionComponent.vue').default);
Vue.component('new-item', require('./components/NewItemComponent.vue').default);
Vue.component('collection-card', require('./components/CollectionCardComponent.vue').default);
Vue.component('collection-list', require('./components/CollectionListComponent.vue').default);
Vue.component('category-list', require('./components/CategoryListComponent.vue').default);
Vue.component('category-item', require('./components/CategoryItemComponent.vue').default);
Vue.component('home-page', require('./components/HomePageComponent.vue').default);
Vue.component('love-button', require('./components/buttons/LoveComponent.vue').default);
Vue.component('category-selection', require('./components/CategorySelection.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
