require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//RAJOUTER VOS COMPONENTS ICI

const app = new Vue({
    el: '#app',
});
