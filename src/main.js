import Vue from 'vue'
import App from './App'
import router from './router'
import 'expose-loader?$!expose-loader?window.jQuery!expose-loader?jQuery!jquery'


Vue.config.productionTip = false

new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
