<template>
  <nav>
    <v-toolbar app fixed color="light">

      <router-link to="/">
        <v-toolbar-title>
          <h3>
            <span class="primary--text">Sepatu</span><span class="accent--text font-weight-regular">Ku</span>
          </h3>
        </v-toolbar-title>
      </router-link> 

      <v-spacer></v-spacer>

      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn flat>
          <v-icon left>chevron_right</v-icon>
          Nais
        </v-btn>
      </v-toolbar-items>

      <v-toolbar-side-icon class="primary--text"></v-toolbar-side-icon>

    </v-toolbar>
  </nav>
</template>

<script>
export default {
  
}
</script>

