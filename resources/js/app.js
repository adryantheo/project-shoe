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
if(document.getElementById("app")) {
  const app = new Vue({
    el: '#app',
    router,
    components: {
      ShoeApp
    }
  });
}

import ShoeAppAdmin from './ShoeAppAdmin'
if(document.getElementById("appAdmin")) {
  const appAdmin = new Vue({
    el: '#appAdmin',
    router,
    components: {
      ShoeAppAdmin
    }
  });
}

