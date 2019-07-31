require('./bootstrap');
import Vue from 'vue';
import Vuetify from 'vuetify';

import Routes from '@/js/routes.js';

import App from '@/js/views/app';

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    router: Routes,
    render: h => h(App),
    vuetify: new Vuetify(),
    data() {
        return {
            activeBtn: 1
        };
    }
});

export default app;
