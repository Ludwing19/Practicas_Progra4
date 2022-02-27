<template>
  <div id="app">    
    <img alt="Vue logo" src="./assets/logo.png">
    <header-title title="Programacion Computacional IV"/>
    <HeaderTitle/>
  </div>
</template>

<script>

import Tienda_online from '../../../../tienda_online/src/components/Tienda_online.vue'
import HeaderTitle from './components/HeaderTitle.vue'

export default {
  name: 'App',
  components: {
    HeaderTitle,
    Tienda_online
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
