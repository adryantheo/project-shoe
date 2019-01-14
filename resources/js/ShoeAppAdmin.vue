<template>
  <v-app>
    <app-navigation v-if="isLogin"></app-navigation>
    <v-content>
      <router-view></router-view>
    </v-content>
  </v-app>
</template>
<script>
import AppNavigation from './components/Admin/Navigation/AppNavigation'

export default {
  components: {
    AppNavigation,
  },
  data() {
    return {
      isLogin: false,
    }
  },
  mounted() {
    EventBus.$emit('rendered')
    
    EventBus.$on('admin_login', (data) => {
      this.isLogin = true
    })

    EventBus.$on('admin_logout', (data) => {
      this.isLogin = false
    })
  }
  
}
</script>
