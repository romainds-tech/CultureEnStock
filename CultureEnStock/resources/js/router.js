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
import axios from 'axios';

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/login', name:'login', component: Login },
        { path: '/register', component: Register },
        { path: '/', name:'home', component: Home},
        { path: '/profile', name:'profile', component: Profile,
            beforeEnter: (to, form, next) =>{
                axios.get('/api/authenticate').then(()=>{
                    next()
                }).catch(()=>{
                    return next({
                        name: 'login'
                    })
                })
            }
        },

        { path: '/event/create', component: CreationEvent },
        { path: '/event/book/:id', name: 'book', component: BookEvent },
        { path: '/event/list', component: ListEvent },
        { path: '/event/deliver', component: DeliverTicket }
    ]
});
