<template>
  <v-app>
    <app-navigation></app-navigation>
    <v-content>
      <router-view></router-view>
    </v-content>
  </v-app>
</template>

<script>
import AppNavigation from './components/Navigation/AppNavigation'

export default {
  components: {
    AppNavigation
  }
}
</script>

