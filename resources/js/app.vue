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

export default {
    name: 'app',
    components: {
        calendar,
        Navbar,
        Footer
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

