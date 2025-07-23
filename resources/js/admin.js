// import './bootstrap';

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

window.axios = axios;

Vue.use(VueAxios, axios)

import pos_system from './components/admin/pos.vue';
Vue.component('pos_system', pos_system);

import Vue2Filters from 'vue2-filters';

Vue.use(Vue2Filters);

const app = new Vue({
    el: '#app',
}).$mount('#app');
