

require('./bootstrap');
// import Vuetify from 'vuetify';


window.Vue = require('vue');
// Vue.use(Vuetify)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('collection', require('./components/Collection.vue').default);
Vue.component('new-collection', require('./components/NewCollectionComponent.vue').default);
Vue.component('new-item', require('./components/NewItemComponent.vue').default);
Vue.component('collection-card', require('./components/CollectionCardComponent.vue').default);
Vue.component('collection-list', require('./components/CollectionListComponent.vue').default);
Vue.component('category-list', require('./components/CategoryListComponent.vue').default);
Vue.component('category-item', require('./components/CategoryItemComponent.vue').default);
Vue.component('home-page', require('./components/HomePageComponent.vue').default);

//Buttons
Vue.component('love-button', require('./components/buttons/LoveComponent.vue').default);
Vue.component('edit-button', require('./components/buttons/EditButton.vue').default);
Vue.component('delete-button', require('./components/buttons/DeleteButton.vue').default);

Vue.component('category-selection', require('./components/CategorySelection.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    
    el: '#app',

    
});
