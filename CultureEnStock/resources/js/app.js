require('./bootstrap');

window.Vue = require('vue').default;

import router from './router';

Vue.component('layout', require('./components/Layout.vue').default);
//RAJOUTER VOS COMPONENTS ICI

const app = new Vue({
    el: '#app',
    router
});
