<template>
  <div id="app">
    <dt-header></dt-header>
      <dt-menu></dt-menu>
        <router-view/>
    <dt-footer></dt-footer>
  </div>

</template>

<script>
import dtFooter from "./components/core/dt-footer.vue"
import dtHeader from "./components/core/dt-header.vue"
import dtMenu from "./components/core/dt-menu.vue"

export default {
  name: 'app',
  components: {
        dtFooter,
        dtHeader,
        dtMenu
    } 
}
</script>
