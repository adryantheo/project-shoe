<template>
  <v-layout fill-height>
    <v-container grid-list-lg>
      <v-layout align-center justify-center row wrap>
        
        <v-flex xs12 class="primary--text text--lighten-1 my-4 text-xs-center">
          <div class="display-1 font-weight-light">
            Sepatu<span class="font-weight-medium accent--text">Ku</span>
          </div>
          <p class="title font-weight-light">Admin</p>
        </v-flex>
        
        <v-flex xs12>
          <v-layout row wrap justify-center>
            <v-card class="elevation-10 rounded-card">
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

                <v-btn block round large color="primary lighten-2" class="mt-5" dark :loading="isSubmitted" type="submit">
                  MASUK
                </v-btn>

              </v-form>
            </v-card-text>  
          </v-card>
          </v-layout>
        </v-flex>

      </v-layout>
    </v-container>
  </v-layout>
</template>
<script>
import axios from 'axios'

export default {
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
        EventBus.$emit('admin_login')
        this.$router.replace('/admin/dashboard')
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

