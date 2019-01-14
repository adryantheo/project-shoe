<template>
  <v-layout fill-height>
    <v-container grid-list-lg>
      <v-layout align-center justify-center row wrap>
        <v-flex xs12 md4 class="white--text mr-3" fill-height style="max-width: 400px">
          <v-layout align-center>
            <div class="primary--text text--lighten-1 hidden-sm-and-down">
              <p class="display-3 font-weight-light">
                Sepatu<span class="font-weight-medium accent--text">Ku</span>
              </p>
              <p class="headline font-weight-light">Tendang aja Bos!</p>
            </div>

            <v-flex xs12 class="primary--text text--lighten-1 hidden-md-and-up my-3 text-xs-center">
              <div class="display-1 font-weight-light">
                Sepatu<span class="font-weight-medium accent--text">Ku</span>
              </div>
              <p class="title font-weight-light" v-if="isLoginForm">Tendang aja Bos!</p>
            </v-flex>
          </v-layout>
        </v-flex>
        
        <v-flex xs12 sm8 md5 lg4 class="form-container" style="max-width: 500px">
          <transition name="slide-fade" mode="out-in">
            <signin-form v-if="isLoginForm" @change="isLoginForm = false"></signin-form>
            <signup-form v-else @change="isLoginForm = true"></signup-form>
          </transition>
        </v-flex>

      </v-layout>
    </v-container>
  </v-layout>
</template>

<script>
import SigninForm from './SigninForm'
import SignupForm from './SignupForm'
export default {
  components: {
    SigninForm,
    SignupForm,
  },
  data() {
    return {
      isLoginForm: true
    }
  }
}
</script>

<style scoped>
  .slide-fade-enter-active, 
  .slide-fade-down-enter-active {
    transition: all .2s ease;
  }
  .slide-fade-leave-active, 
  .slide-fade-down-leave-active {
    transition: all .2s cubic-bezier(1.0, 0.5, 0.8, 1.0);
  }

  .slide-fade-enter, .slide-fade-leave-to, 
  .slide-fade-down-enter, .slide-fade-down-leave-to {
    transform: translateX(10px);
    opacity: 0;
  }
</style>

