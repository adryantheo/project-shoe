<template>
  <nav>
    <v-toolbar app fixed color="light">

      <router-link to="/">
        <v-toolbar-title>
          <h3>
            <span class="primary--text font-weight-regular">Sepatu</span><span class="accent--text">Ku</span>
          </h3>
        </v-toolbar-title>
      </router-link> 

      <v-spacer></v-spacer>
      
      <v-toolbar-items>
        <v-btn 
          flat
          to="/cart"
        >

          <v-badge left color="accent">
            <span slot="badge">
              3
            </span>
            <v-icon
              left
              color="primary"
            >
              shopping_cart
            </v-icon>
          </v-badge>
          keranjang
        </v-btn>

        <v-btn flat to="/welcome">
          <v-icon left>create</v-icon>
          Masuk
        </v-btn>
        
        <v-menu
          v-model="menu"
          :close-on-content-click="false"
          :nudge-width="200"
          offset-y
        >
          <v-btn icon slot="activator">
            <v-icon>more_vert</v-icon>
          </v-btn>

          <v-card>
            <v-list>
              <v-list-tile avatar>
                <v-list-tile-avatar>
                  <img
                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                    alt="John"
                  >
                </v-list-tile-avatar>

                <v-list-tile-content>
                  <v-list-tile-title>Koksal Baba</v-list-tile-title>
                  <v-list-tile-sub-title>Lihat profil saya</v-list-tile-sub-title>
                </v-list-tile-content>

              </v-list-tile>
            </v-list>

            <v-divider></v-divider>

            <v-list>
              <v-list-tile 
                avatar
                v-for="(item, index) in menuItems" :key="index"
              >
                <v-list-tile-avatar>
                  <v-icon :class="item.iconClass">
                    {{ item.icon }}
                  </v-icon>
                </v-list-tile-avatar>

                <v-list-tile-content>
                  <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                </v-list-tile-content>

              </v-list-tile>

            </v-list>

            <v-divider></v-divider>
            <v-list>
              <v-list-tile avatar>
                <v-list-tile-avatar>
                  <v-icon class="accent white--text">
                    power_settings_new
                  </v-icon>
                </v-list-tile-avatar>

                <v-list-tile-content>
                  <v-list-tile-title>Keluar</v-list-tile-title>
                </v-list-tile-content>
              </v-list-tile>
            </v-list>

          </v-card>
        </v-menu>
        
      </v-toolbar-items>
    </v-toolbar>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      menu: false,
      menuItems: [
        {
          icon: 'account_circle',
          iconClass: 'primary white--text',
          title: 'Menu 1',
        },
        {
          icon: 'account_circle',
          iconClass: 'yellow white--text',
          title: 'Menu 2',
        },
        {
          icon: 'account_circle',
          iconClass: 'blue white--text',
          title: 'Menu 3',
        },
      ],
    }
  },
  computed: {
    getCartSize() {
      return this.$cart.length
    }
  }
}
</script>

