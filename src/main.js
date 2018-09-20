import Vue from 'vue'
import App from './App'
import router from './router'
import 'expose-loader?$!expose-loader?window.jQuery!expose-loader?jQuery!jquery'
import 'bootstrap'

require('./../node_modules/bootstrap/dist/css/bootstrap.css')
require('./../node_modules/font-awesome-scss/css/font-awesome.min.scss')

Vue.config.productionTip = false

new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})