import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import VueApexCharts from 'vue-apexcharts'

Vue.use(BootstrapVue)
Vue.use(VueApexCharts)

Vue.component('apexchart', VueApexCharts)

import App from './views/App'

const app = new Vue({
    el: '#app',
    components: { App }
});
