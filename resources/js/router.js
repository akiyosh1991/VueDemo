import Vue from 'vue'
import VueRouter from 'vue-router'

import Login from './pages/Login.vue'
import Calender from './components/Calendar.vue'
import store from './store'
import SystemError from './pages/errors/System.vue'

// これによってVueプラグインを使用する事ができる。
//　これによって<RouterView />コンポーネントなどをしようする事ができる
Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        component: Calender
    },
    {
        path: '/login',
        component: Login,
        beforeEnter(to, from, next) {
            if (store.getters['auth/check']) {
                next('/')
            } else {
                next()
            }
        }
    },
    {
        path: '/500',
        component: SystemError
    }
]

// VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history',
  routes
})

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router
