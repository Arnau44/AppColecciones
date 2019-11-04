/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import toggleForm from 'showElements';

require('./showElements');

window.Vue = require('vue');
Vue.component('my-comments-component', require('./components/MyCommentsComponent.vue').default);
Vue.component('comments-component', require('./components/commentsComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);


const app = new Vue({
    el: '#app',
});

