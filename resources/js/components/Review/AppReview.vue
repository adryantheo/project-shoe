<template>
  <v-container grid-list-lg class="my-5">
    <p class="headline primary--text">Review {{ slug }}</p>
    <v-divider class="my-3"></v-divider>
    <v-layout row wrap>
      <v-flex
        xs12
        md6
        v-for="(item, index) in items" :key="index"
      >
        <v-card>
          <v-list three-line>
            <v-list-tile
              :key="item.title"
              avatar
            >
              <v-list-tile-avatar>
                <img :src="item.avatar">
              </v-list-tile-avatar>

              <v-list-tile-content>
                <v-list-tile-title>{{ item.name }}</v-list-tile-title>
                <v-list-tile-sub-title>
                  <v-icon 
                    color="warning"
                    v-for="index in 5" :key="index"
                  >
                    star_border
                  </v-icon>
                </v-list-tile-sub-title>
                <v-list-tile-sub-title>{{ item.title }}</v-list-tile-sub-title>
              </v-list-tile-content>

            </v-list-tile>
            
          </v-list>
        </v-card>
      
      </v-flex>
    </v-layout>
  </v-container>
</template>
<script>
export default {
  data() {
    return {
      slug: this.$route.params.slug,
      items: [
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
          title: 'Good',
          name: "Jim Jommy",
        },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
          title: 'Oui oui',
          name: "Jim Jommy",
        },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg',
          title: 'Very nice',
          name: "Jim Jommy",
        },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
          title: 'Awesome',
          name: "Jim Jommy",
        }
      ],
    }
  }
}
</script>
