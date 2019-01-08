import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../components/Home/AppHome'

Vue.use(VueRouter)

const routes = [
  { path:'/', component: Home, name:"home"},
]

const router = new VueRouter({
  routes,
  hashbang: false,
  mode: 'history',
})

export default router;