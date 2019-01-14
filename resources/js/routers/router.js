import Vue from 'vue'
import VueRouter from 'vue-router'

import AppHome from '../components/Pengunjung/Home/AppHome'

import AppWelcome from '../components/Pengunjung/Welcome/AppWelcome'

import AppItemDetail from '../components/Pengunjung/Items/AppItemDetail'

import AppCart from '../components/Pengunjung/Shopping/AppCart'
import AppCheckout from '../components/Pengunjung/Shopping/AppCheckout'

import AppReview from '../components/Pengunjung/Review/AppReview'

Vue.use(VueRouter)

const routes = [
  { path:'/', component: AppHome, name:'home' },
  
  { path:'/welcome', component: AppWelcome, name:'welcome' },

  { path:'/item/:slug', component: AppItemDetail, name:'detail' },
  { path:'/item/:slug/review', component: AppReview, name:'review' },

  { path:'/cart', component: AppCart, name:'cart' },
  { path:'/checkout', component: AppCheckout, name:'checkout' },
  

]

const router = new VueRouter({
  routes,
  hashbang: false,
  mode: 'history',
})

export default router;