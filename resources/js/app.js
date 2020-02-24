import './bootstrap';
import Vue from 'vue'
import VCalendar from 'v-calendar'
import App from './app.vue'
import router from './router.js'
import store from './store'


Vue.use(VCalendar)

new Vue({
    el: '#app',
    router,
    store,
    components: { App },
    template: '<App />',
    render: h => h(App),
}).$mount('#app')
