import Vue from 'vue'
import VueRouter from 'vue-router'

import AppHome from '../components/Home/AppHome'

import AppWelcome from '../components/Welcome/AppWelcome'

import AppItemDetail from '../components/Items/AppItemDetail'

import AppCart from '../components/Shopping/AppCart'
import AppCheckout from '../components/Shopping/AppCheckout'

import AppReview from '../components/Review/AppReview'

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