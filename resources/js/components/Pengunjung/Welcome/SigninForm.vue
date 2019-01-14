<template>
  <v-card class="elevation-10 pb-3 px-3 rounded-card" color="light">
    <v-card-text>
      <v-form ref="form" @submit.prevent="login" lazy-validation>
        
        <v-text-field 
          v-model="form.email.email" 
          :rules="form.email.emailRules" 
          label="E-mail" 
          color="primary"
          autofocus 
          required
        ></v-text-field>

        <v-text-field 
          v-model="form.password.password" 
          :append-icon="showPassword ? 'visibility_off' : 'visibility'"
          @click:append="showPassword = !showPassword" 
          :type="showPassword ? 'text' : 'password'"
          :rules="form.password.passwordRules" 
          label="Password" 
          color="primary"
          required
        ></v-text-field>

        <forgot-password></forgot-password>

        <v-btn block round large color="primary lighten-2" class="mt-5" dark :loading="isSubmitted" type="submit">
          MASUK
        </v-btn>

        <div class="text-xs-center mt-3">
          <span class="primary--text">Belum punya akun?</span>
          <v-btn color="primary" outline round small @click="$emit('change')">Daftar</v-btn>
        </div>
      </v-form>
      
    </v-card-text>
    
  </v-card>
</template>

<script>
  import axios from 'axios'
  import ForgotPassword from './ForgotPassword'

  export default {
    components: {
      ForgotPassword
    },
    data(){
      return{
        showPassword: false,
        isSubmitted: false,
        form: {
          email: {
            email: '',
            emailRules: [
              v => !!v || 'E-mail harus diisi',
              v => /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(v) || 'E-mail tidak valid'
            ],
          },
          password: {
            password: '',
            passwordRules: [
              v => !!v || 'Password harus diisi',
            ]
          }
        },
      }
    },
    methods:{
      async login(){
        return
        // if(this.$refs.form.validate()) {
          
        //   this.isSubmitted = true
          
        //   const request = {
        //     email: this.form.email.email,
        //     password: this.form.password.password
        //   }
          
        //   try {
        //     let res1 = await User.login(request)
        //     let res2 = await User.responseAfterLogin(res1)
        //     // this.$router.replace('/')
        //     window.location = '/'
        //   } catch(err) {
        //     console.log(err);
        //     this.isSubmitted = false 
        //     EventBus.$emit('snackbar', 'Login anda gagal.')
        //   }
        // }
      }
    },
  }
</script>

<style>

</style>
