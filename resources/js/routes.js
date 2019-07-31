import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/home';
import Admin from '@//js/components/admin';

Vue.use(VueRouter);

let router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/1',
            name: 'home',
            component: Home
        },
        {
            path: '/2',
            name: 'admin',
            component: Admin
        }
    ]
});

export default router;
