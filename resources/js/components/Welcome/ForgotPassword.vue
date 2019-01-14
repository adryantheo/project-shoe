<template>
  <v-dialog
    v-model="dialog"
    max-width="550"
  >
    <span :class="`primary--text ${hovered? 'text--lighten-2': ''}`"
    @mouseover="hovered = true"
    @mouseout="hovered = false"
    slot="activator">
      Lupa password?
    </span>

    <v-card class="px-2 pt-2 pb-1 rounded-card">
      
      <v-card-title class="headline">
        Lupa password?
      </v-card-title>

      <v-form ref="form" @submit.prevent="sendEmail" lazy-validation>

        <v-card-text>
          <p class="grey--text">Masukkan email pemulihan password anda.</p>
          <v-text-field v-model="form.email" label="Email" :rules="form.emailRules" required></v-text-field>
        </v-card-text>

        <v-card-actions class="pa-3">
          <v-spacer></v-spacer>
          <v-btn
            color="grey" large
            flat @click="dialog = false"
          >
            BATAL
          </v-btn>

          <v-btn
            color="primary lighten-1" large
            type="submit"
          >
            KIRIM
          </v-btn>

        </v-card-actions>
      </v-form>

    </v-card>

  </v-dialog>
</template>

<script>
  export default {
    data() {
      return {
        dialog: false,
        hovered: false,
        form: {
          email: '',
          emailRules: [
            v => !!v || 'E-mail harus diisi',
            v => /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(v) || 'E-mail tidak valid'
          ]
        }
      }
    },
    methods: {
      sendEmail() {
        if(this.$refs.form.validate()) {
          this.dialog = false
          this.form.email = null
          EventBus.$emit('snackbar', 'Email pemulihan dikirimkan.')
        }
      }
    },
  }
</script>
