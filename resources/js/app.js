import Vue from 'vue'
import VCalendar from 'v-calendar'
import App from './app.vue'

Vue.use(VCalendar)

new Vue({
    render: h => h(App),
}).$mount('#app')
