<template>
  <v-app>
    <app-navigation></app-navigation>
    <v-content>
      <router-view></router-view>
    </v-content>

    <v-snackbar
      v-model="snackbar.show"
      bottom
      left
      multi-line
    >
      {{ snackbar.content }}
      <v-btn dark flat color="primary lighten-4" @click.native="snackbar.show = false">Close</v-btn>
    </v-snackbar>
  </v-app>
</template>

<script>
import AppNavigation from './components/Pengunjung/Navigation/AppNavigation'

export default {
  components: {
    AppNavigation
  },
  data() {
    return {
      snackbar: {
        show: false,
        content: '',
      },
    }
  },
  mounted() {
    EventBus.$on('snackbar', (data) => {
      this.snackbar.content = data
      this.snackbar.show = true
    })
  }
}
</script>

