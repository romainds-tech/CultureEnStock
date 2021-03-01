import Vue from 'vue';
import VueRouter from 'vue-router';

import Login from './pages/Login.vue';
import Home from './pages/Home.vue'
import Profile from './pages/Profile.vue'
import Register from './pages/Register.vue'

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/login', component: Login },
        { path: '/register', component: Register },
        { path: '/', component: Home},
        { path: '/profile', component: Profile},
    ]
});
