<script setup>
import { useRegisterStore } from "@/store/useRegisterStore"
const LogoCompany = '/images/logo.png'
const registerStore = useRegisterStore()
</script>

<template>
   <div class="mt-5">
    <div class="page page-center">
      <div class="container container-tight py-4">
       
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
       
        
        <!-- ubah ke registerStore.register -->
        <form class="card card-md" @submit.prevent="registerStore.register" autocomplete="off" novalidate>
          <div class="card-body">
            <h2 class="card-title text-center mb-4 fw-bold text-warning">Create your new account</h2>
            <div class="mb-3">
              <label class="form-label text-warning">Full Name</label>
              <!-- ubah v-model ke registerStore.fullname -->
              <input type="text" class="form-control" v-model="registerStore.fullname" placeholder="Enter fullname" />
            </div>

            <div class="mb-3">
              <label class="form-label text-warning">UserName</label>
              <input type="text" class="form-control" v-model="registerStore.username" placeholder="Enter Username" />
            </div>

            <div class="mb-3">
              <label class="form-label text-warning">Email Address</label>
              <input type="email" class="form-control" v-model="registerStore.email" placeholder="Enter email" />
            </div>

             <div class="mb-3">
              <label class="form-label text-warning">No Handphone</label>
              <input type="number" class="form-control" v-model="registerStore.phone_number" placeholder="Enter No Handphone" />
            </div>

            <div class="mb-3">
              <label class="form-label text-warning">Password</label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" v-model="registerStore.password" placeholder="Password" autocomplete="off" />
                <span class="input-group-text">
                  <!-- icon mata password -->
                  <i class="fas fa fa-eye"></i>
                </span>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-check">
                <input type="checkbox"  v-model="registerStore.agreeTerms" class="form-check-input" />
                <span class="form-check-label">Agree the <a href="" tabindex="-1" class="text-warning">terms and policy</a>.</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-warning w-100">Create new account</button>
            </div>
          </div>
        </form>
        <div class="text-center text-secondary mt-3">Already have account? <a href="/login" tabindex="-1" class="text-warning">Sign in</a></div>
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