<template>
  <v-card class="elevation-10 pb-3 px-3 rounded-card" color="light">
    <v-card-text>
      <v-form ref="form" @submit.prevent="signup" lazy-validation>

        <v-text-field v-model="form.nama.nama" :rules="form.nama.rules" label="Nama" autofocus required></v-text-field>

        <v-text-field v-model="form.email.email" :rules="form.email.rules" label="Email" required></v-text-field>
        
        <v-text-field v-model="form.no_handphone.no_handphone" :rules="form.no_handphone.rules" label="No Handphone" required></v-text-field>
        
        <v-textarea
          v-model="form.address.address"
          :rules="form.address.rules"
          auto-grow
          rows="3"
          counter="100"
          label="Alamat"
          required
        ></v-textarea>

        <v-text-field 
          v-model="form.password.password" 
          :rules="form.password.rules" 
          :append-icon="showPassword ? 'visibility_off' : 'visibility'"
          @click:append="showPassword = !showPassword" 
          :type="showPassword ? 'text' : 'password'"
          label="Password" 
          required
        ></v-text-field>
        
        <v-text-field 
          v-model="form.password.confirm" 
          :rules="form.password.confirmRules" 
          type="password" 
          label="Konfirmasi password" 
          required
        ></v-text-field>
        
        <v-btn block round large color="primary lighten-2" class="mt-5" dark :loading="isSubmitted" type="submit">
          Daftar
        </v-btn>

        <div class="text-xs-center mt-3">
          <span class="primary--text">Sudah punya akun?</span>
          <v-btn color="primary" outline round small @click="$emit('change')">Masuk</v-btn>
        </div>

      </v-form>
    </v-card-text>
  </v-card>
</template>

<script>
export default {
  data(){
    return{
      showPassword: false,
      isSubmitted: false,
      form:{
        nama:{
          nama:'',
          rules:[
            v => !!v || 'Nama harus diisi',
            v => v.length > 5 || 'Nama harus lebih dari lima karakter'
          ],
        },
        email:{
          email:'',
          rules:[
            v => !!v || 'E-mail harus diisi',
            v => /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(v) || 'E-mail tidak valid'
          ],
        },
        no_handphone:{
          no_handphone:'',
          rules:[
            v => !!v || 'Nomor ponsel perlu diisi',
            v => /^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$/.test(v) || 'Nomor ponsel tidak valid'
          ],
        },
        address: {
          address: '',
          rules:[
            v => !!v || 'Alamat perlu diisi',
            v => v.length < 100 || 'Alamat maksimal 100 karakter',
          ],
        },
        password:{
          password:'',
          confirm:'',
          rules:[
            v => !!v || 'Password harus diisi',
            v => v.length >= 6 || 'Password minimal 6 karakter'
          ],
          confirmRules: [
            v => !!v || 'Konfirmasi password harus diisi',
            v => v === this.form.password.password || 'Password tidak sesuai'
          ]
        }
      }
    }
  },
  methods: {
    async signup(){
      return
      // if(this.$refs.form.validate()) {

      //   this.isSubmitted = true
      //   const request = {
      //     name: this.form.nama.nama,
      //     email: this.form.email.email,
      //     no_handphone: this.form.no_handphone.no_handphone,
      //     password: this.form.password.password
      //   }

      //   try {
      //     let res1 = await User.signup(request)
      //     let res2 = await User.responseAfterLogin(res1)
      //     // this.$router.replace('/')
      //     window.location = '/'
      //   } catch(err) {
      //     console.log(err);
      //     this.isSubmitted = false 
      //     EventBus.$emit('snackbar', 'Signup anda gagal.')
      //   }
      // }
    }
  }
}
</script>

<style>

</style>
