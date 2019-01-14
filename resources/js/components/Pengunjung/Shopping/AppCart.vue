<template>
  <v-container grid-list-lg class="my-5">
    <p class="headline primary--text">Keranjang saya</p>
    <v-divider class="my-3"></v-divider>

    <v-layout row wrap>
      <v-flex xs12 v-for="(item, index) in items" :key="index">
        <v-card class="rounded-card">
          <v-layout>
            <v-flex xs4 class="py-0">
              <v-img
                :src="item.thumbnail"
                height="170"
                contain
              ></v-img>
            </v-flex>
            <v-flex xs5 class="pt-3">
              <div class="overflow-text">
                <p class="title mb-2">{{ item.nama }}</p>
                <p class="subheading grey--text text--darken-1">{{ item.merk }}</p>
                <p class="title primary--text">IDR {{ item.harga }}</p>
                <p>
                  <v-icon 
                    color="warning"
                    v-for="index in 5" :key="index"
                  >star_border</v-icon>
                </p>
              </div>
            </v-flex>
          </v-layout>
          <v-divider light></v-divider>
          <v-card-actions class="pa-3">
            
            <v-spacer></v-spacer>
            <v-btn color="warning" round>Batalkan</v-btn>
          </v-card-actions>
        </v-card>
        
      </v-flex>
    </v-layout>

    <div class="my-5">
      <v-btn color="accent" class="mb-3" large round block @click="checkout">checkout</v-btn>
    </div>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      items: [
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
      ]
    }
  },
  methods: {
    checkout() {
      this.$router.push({ name: 'checkout'})
    }
  },
}
</script>
