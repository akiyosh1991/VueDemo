<template>
  <div id="app">
      <header>
        <Navbar />
      </header>
      <main>
          <div class="container">
                <RouterView />
          </div>
      </main>
      <Footer />
  </div>
</template>


<script>
import calendar from './components/Calendar.vue'
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
import { INTERNAL_SERVER_ERROR} from './util'

export default {
    name: 'app',
    components: {
        calendar,
        Navbar,
        Footer
    },
    computed: {
        errorCode () {
            return this.$store.state.error.code
        }
    },
    watch: {
        errorCode: {
            handler (val) {
                if (val === INTERNAL_SERVER_ERROR) {
                    this.router.push('/500')
                }
            }
        },
        immediate: true
    },
    $route() {
        this.$store,commit('error/setCode', null)
    }
}
</script>

<style>
    #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
</style>

