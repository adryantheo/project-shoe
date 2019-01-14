<template>
  <div>
    <v-container class="py-0">
      <v-carousel height="40vh">
        <v-carousel-item
          v-for="(item,i) in items"
          :key="i"
          :src="item.src"
        ></v-carousel-item>
      </v-carousel>
    </v-container>
    <home-menu></home-menu>
  </div>
</template>

<script>
import HomeMenu from './HomeMenu'

export default {
  components: {
    HomeMenu
  },
  data() {
    return {
      items: [
        {
          src: "/img/sale_ad.jpg"
        },
        {
          src: "/img/adidas_ad.jpg"
        },
      ]
    }
  }
}
</script>