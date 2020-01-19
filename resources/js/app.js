import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)

import App from './views/App'

const app = new Vue({
    el: '#app',
    components: { App }
});
