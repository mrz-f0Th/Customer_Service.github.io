window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import routes from './router'
import VueToast from 'vue-toast-notification';
// Import one of the available themes
//import 'vue-toast-notification/dist/theme-default.css';
import 'vue-toast-notification/dist/theme-sugar.css';

import Chartkick from 'vue-chartkick'
import Chart from 'chart.js'

Vue.use(Chartkick.use(Chart))

Vue.use(VueToast);
//Vue.$toast.open({/* options */});
let instance = Vue.$toast.open('You did it!');

// Force dismiss specific toast
instance.dismiss();
// Dismiss all opened toast immediately
Vue.$toast.clear();

Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    data() {
        return {
            isDarkMode: false
        }
    }
});
