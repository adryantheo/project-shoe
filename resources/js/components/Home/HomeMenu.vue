<template>
  <v-container grid-list-lg class="my-5">
    <p class="headline font-weight-medium">Produk populer</p>
    <v-divider class="my-3"></v-divider>
    <v-layout class="populer pb-2">
      <span v-for="(item, index) in populer" :key="`pop-${index}`" class="ma-2">
        <v-card class="rounded-card"
          width="200"
          :to="`item/${item.slug}`" 
          tile
          hover
          :ripple="{ class: 'primary--text' }"
        >
          <v-img
            :src="item.thumbnail"
            height="150"
          ></v-img>

          <v-card-title>
            <div class="overflow-text">
              <p class="title mb-2">{{ item.nama }}</p>
              <p class="subheading grey--text text--darken-1">{{ item.merk }}</p>
              <p class="title primary--text">IDR {{ item.harga }}</p>
            </div>
          </v-card-title>
        </v-card>
      </span>
    </v-layout>
    
    <p class="headline font-weight-medium pt-5">Produk terbaru</p>
    <v-divider class="my-3"></v-divider>
    <v-layout row wrap>
      <v-flex xs12 sm6 lg4 v-for="(item, index) in terbaru" :key="`baru-${index}`">
        <v-card class="rounded-card"
          :to="`item/${item.slug}`" 
          tile
          hover
          :ripple="{ class: 'primary--text' }"
        >
          <v-img
            :src="item.thumbnail"
            height="150"
          ></v-img>

          <v-card-title>
            <div class="overflow-text">
              <p class="title mb-2">{{ item.nama }}</p>
              <p class="subheading grey--text text--darken-1">{{ item.merk }}</p>
              <p class="title primary--text">IDR {{ item.harga }}</p>
            </div>
          </v-card-title>
        </v-card>
      </v-flex>
    </v-layout>

  </v-container>
</template>

<script>
export default {
  data() {
    return {
      populer: [
        {
          thumbnail: "/img/shoe-baru.jpg",
          slug: "shoe-baru",
          nama: "Sepatu Baru",
          merk: "Adidas",
          harga: 1000000,
        },
        {
          thumbnail: "/img/shoe-baru.jpg",
          slug: "shoe-baru",
          nama: "Sepatu Baru",
          merk: "Adidas",
          harga: 1000000,
        },
        {
          thumbnail: "/img/shoe-baru.jpg",
          slug: "shoe-baru",
          nama: "Sepatu Baru",
          merk: "Adidas",
          harga: 1000000,
        },
        {
          thumbnail: "/img/shoe-baru.jpg",
          slug: "shoe-baru",
          nama: "Sepatu Baru",
          merk: "Adidas",
          harga: 1000000,
        },
        {
          thumbnail: "/img/shoe-baru.jpg",
          slug: "shoe-baru",
          nama: "Sepatu Baru",
          merk: "Adidas",
          harga: 1000000,
        },
        {
          thumbnail: "/img/shoe-baru.jpg",
          slug: "shoe-baru",
          nama: "Sepatu Baru",
          merk: "Adidas",
          harga: 1000000,
        },
      ],
      terbaru: [
        {
          thumbnail: "/img/shoe-baru.jpg",
          slug: "shoe-baru",
          nama: "Sepatu Baru",
          merk: "Adidas",
          harga: 1000000,
        },
        {
          thumbnail: "/img/shoe-baru.jpg",
          slug: "shoe-baru",
          nama: "Sepatu Baru",
          merk: "Adidas",
          harga: 1000000,
        },
      ],
    }
  }
}
</script>
<style scoped>
  .populer {
    overflow-x: auto;
  }
</style>
