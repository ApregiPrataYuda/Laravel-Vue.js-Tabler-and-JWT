<script setup>
import { ref } from "vue";
import { useAuthStore } from "@/store/useLoginStore";

const auth = useAuthStore();

const email = ref("");
const password = ref("");
const remember = ref(false);

const submitLogin = () => {
  auth.login(email.value, password.value, remember.value);
};

const LogoCompany = '/images/logo.png'
</script>





<template>
  <div class="mt-5">
    <div class="page page-center">
      <div class="container container-normal py-4">
        <div class="row align-items-center g-4">
          <div class="col-lg">
            <div class="container-tight">
              <!-- Logo -->
              <div class="text-center mb-3">
              <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="" aria-label="Tabler">
                  <img :src="LogoCompany" class="navbar-brand-image" viewBox="0 0 232 68" alt="">
                </a>
                <div class="navbar-brand d-flex flex-column align-items-start">
                  <span class="fw-bold text-capitalize text-warning fs-1">Teman Dental</span>
                  <small class="text-warning fs-4">dental for everyone</small>
                </div>
              </div>
            </div>



            <div class="alert alert-warning alert-dismissible" role="alert">
                      <div class="alert-icon">
                        <i class="fa-regular fa-face-smile-wink"></i>
                      </div>
                      Please Login For Reservasion!
                      <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>

              <!-- Card -->
              <div class="card card-md">
                <div class="card-body">
                  <h2 class="h2 text-center mb-4 text-warning">Login to your account</h2>

                  <!-- Error global -->
                  <div
                    v-if="auth.error && !auth.error.includes('berhasil')"
                    class="alert alert-danger d-flex align-items-center"
                    role="alert"
                  >
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <div>{{ auth.error }}</div>
                  </div>

                  <!-- Form -->
                  <form @submit.prevent="submitLogin" autocomplete="off" novalidate>
                    <!-- Email -->
                    <div class="mb-3">
                      <label class="form-label text-warning">Email address</label>
                      <input
                        type="email"
                        class="form-control"
                        placeholder="your@email.com"
                        v-model="email"
                        :class="{ 'is-invalid': auth.validationErrors.email }"
                        autocomplete="off"
                      />
                      <div v-if="auth.validationErrors.email" class="invalid-feedback">
                        {{ auth.validationErrors.email[0] }}
                      </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-2">
                      <label class="form-label text-warning">
                        Password
                        <span class="form-label-description">
                          <a href="/forgot-password" class="text-warning">I forgot password</a>
                        </span>
                      </label>
                      <div class="input-group input-group-flat">
                        <input
                          type="password"
                          class="form-control"
                          v-model="password"
                          :class="{ 'is-invalid': auth.validationErrors.password }"
                          placeholder="Your password"
                          autocomplete="off"
                        />
                        
                        <span class="input-group-text">
                           <i class="fas fa fa-eye"></i>
                        </span>
                        <div v-if="auth.validationErrors.password" class="invalid-feedback">
                          {{ auth.validationErrors.password[0] }}
                        </div>
                      </div>
                    </div>

                    <!-- Submit -->
                    <div class="form-footer">
                      <button type="submit" class="btn btn-warning w-100">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Register link -->
              <div class="text-center text-secondary mt-3">
                Don't have account yet?
                <a href="/register" tabindex="-1" class="text-warning">Sign up</a>
              </div>
               <div class="text-center text-secondary mt-1">
                Back To Home?
                <a href="/" tabindex="-1" class="text-warning">Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<style scoped>
.navbar-brand-image {
  max-width: 45px;
  height: auto;
}
</style>