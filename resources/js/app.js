import Vue from 'vue'
import VCalendar from 'v-calendar'
import App from './app.vue'
import router from './router.js'


Vue.use(VCalendar)

new Vue({
    el: '#app',
    router,
    components: { App },
    template: '<App />',
    render: h => h(App),
}).$mount('#app')
