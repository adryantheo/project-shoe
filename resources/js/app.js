require('./bootstrap');
import Vue from 'vue'
import Vuetify from 'vuetify'
import router from './routers/router.js'

Vue.use(Vuetify, {
  iconfont: 'md',
  // override colors
  theme: {
    primary: '#3f51b5',
    accent: '#ff5252',
  }
})

window.EventBus = new Vue()
window.axios = require('axios')

Vue.prototype.$cart = []

import ShoeApp from './ShoeApp'
const app = new Vue({
  el: '#app',
  router,
  components: {
    ShoeApp
  }
});
