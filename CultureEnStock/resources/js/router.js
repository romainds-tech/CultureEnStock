import Vue from 'vue';
import VueRouter from 'vue-router';

import Login from './pages/Login.vue';
import Home from './pages/Home.vue'
import Profile from './pages/Profile.vue'
import Register from './pages/Register.vue'

import CreationEvent from './pages/events/CreationEvent.vue'
import ListEvent from './pages/events/ListEvent.vue'
import DeliverTicket from './pages/events/DeliverTicket.vue'
import BookEvent from './pages/events/BookEvent.vue'

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        { path: '/login', component: Login },
        { path: '/register', component: Register },
        { path: '/', component: Home},
        { path: '/profile', component: Profile},

        { path: '/event/create', component: CreationEvent },
        { path: '/event/book/:id', name: 'book', component: BookEvent },
        { path: '/event/list', component: ListEvent },
        { path: '/event/deliver', component: DeliverTicket }
    ]
});
