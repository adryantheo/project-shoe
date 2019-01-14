<template>
  <v-container grid-list-lg class="my-5">
    <v-layout row wrap justify-space-around="">
      <v-flex xs12 md4 lg3>
        <v-img src="/img/poster-beasiswa-mahaghora-2018.jpg" contain max-height="500" max-width="500" color="dark"></v-img>
      </v-flex>
      <v-flex xs12 md7 lg8>
        <p class="headline primary--text">{{ sepatu.nama }}</p>
        <p class="headline accent--text font-weight-bold">IDR {{ sepatu.harga }}</p>
        <v-layout row align-center>
          <v-flex style="max-width: 140px">
            <v-icon 
              color="warning"
              v-for="index in 5" :key="index"
            >
              star_border
            </v-icon>
          </v-flex>
          <v-flex>
            <v-btn color="accent" small outline round
              :to="`/item/${slug}/review`"
            >
              30 ulasan
              <v-icon right>chevron_right</v-icon>
            </v-btn>
          </v-flex>
        </v-layout>
        <v-divider class="my-3"></v-divider>
        
        <p class="title">Deskripsi</p>
        <p class="subheading pb-4">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, a, quas distinctio explicabo enim et beatae dignissimos quia praesentium amet ea ipsam tempore natus, iusto officia aperiam eveniet nisi ex vero recusandae sit quo! Id ipsam aperiam amet. Provident veniam quam aperiam illum consequuntur error dolorem 
          
          id maxime delectus quod hic aut doloremque libero enim tenetur corporis consectetur, obcaecati dolor nemo mollitia vitae. Sunt tempore molestias, numquam voluptate reprehenderit voluptatum suscipit perspiciatis at maiores repudiandae velit ipsum assumenda earum autem maxime animi, soluta vel eum deleniti, quidem corporis ipsam reiciendis! Placeat beatae delectus minima sed nobis ex nihil provident ut!
        </p>

        <p class="title">Fitur</p>
        <div class="pb-4">
          <p 
            v-for="(item, index) in sepatu.fitur" :key="index"
            class="subheading"
          >
            {{ item.nama }}
          </p>
        </div>

        <div class="my-5">
          <v-btn color="accent" class="mb-3" large round block @click="addAndCheckout">pesan dan checkout</v-btn>
          <v-btn color="accent" class="mb-3" outline large round block @click="addToCart">tambah ke keranjang</v-btn>
        </div>

        
      </v-flex>
    </v-layout>
  </v-container>
</template>
<script>
export default {
  data() {
    return {
      slug: this.$route.params.slug,
      sepatu: {
        nama: "Lorem ipsum dolor sit amet",
        harga: 1000000,
        fitur: [
          {
            nama: "Bisa lorem"
          },
          {
            nama: "Bisa ipsum"
          },
          {
            nama: "Bisa lorem ipsum"
          },
        ]
      }
    }
  },
  methods: {
    addToCart() {
      return new Promise((resolve, reject) => {
        // do something
        if(true) resolve()
        else reject("tes error")
      })
    },
    async addAndCheckout() {
      try {
        let res = await this.addToCart()
        this.$router.push({ name: 'checkout'})
      } catch(err) {
        console.log(err);
      }
    }
  },
  async mounted() {
    
  },
}
</script>
