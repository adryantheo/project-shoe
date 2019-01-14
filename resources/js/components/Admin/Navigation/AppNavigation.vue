<template>
  <nav>
    <v-toolbar app>
      <v-toolbar-side-icon class="grey--text" @click="drawer = !drawer"></v-toolbar-side-icon>

      <router-link to="/">
        <v-toolbar-title>
          <h3>
            <span class="primary--text font-weight-regular">Sepatu</span><span class="accent--text">Ku</span>
          </h3>
        </v-toolbar-title>
      </router-link> 

    </v-toolbar>
    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <v-toolbar flat class="transparent">
        <v-list class="pa-0">
          <v-list-tile avatar>
            <v-list-tile-avatar>
              <img src="https://randomuser.me/api/portraits/men/85.jpg">
            </v-list-tile-avatar>

            <v-list-tile-content>
              <v-list-tile-title>John Leider</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-toolbar>

      <v-list class="pt-0" dense>
        <v-divider></v-divider>

        <v-list-tile
          v-for="item in items"
          :key="item.title"
          :to="item.to"
        >
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>

          <v-list-tile-content>
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
  </nav>
</template>
<script>
export default {
  data () {
    return {
      drawer: true,
      items: [
        { title: 'Home', icon: 'dashboard', to: '/dashboard' },
        { title: 'Logout', icon: 'question_answer', to: '/admin' }
      ],
      right: null
    }
  },
  mounted() {
    EventBus.$emit('admin_login')
  },
}
</script>
