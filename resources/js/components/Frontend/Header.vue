<script setup>
const profileImage = '/images/avatar.jpg';
const LogoCompany = '/images/logo.png'
</script>




<template>
    <div class="page">
      <!-- BEGIN NAVBAR  -->
      <header class="navbar navbar-expand-md d-print-none" style="background: #FFD700;">
        <div class="container-xl">
          <!-- BEGIN NAVBAR TOGGLER -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-menu"
            aria-controls="navbar-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- END NAVBAR TOGGLER -->
          <!-- BEGIN NAVBAR LOGO -->
          <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="." aria-label="Tabler">
              <img :src="LogoCompany"  class="navbar-brand-image" viewBox="0 0 232 68" alt="">
            </a>
            <div class="navbar-brand d-flex flex-column align-items-start">
            <span class="fw-bold text-capitalize text-warning">Teman Dental</span>
            <small class="text-warning">dental for everyone</small>
          </div>
          </div>
          <!-- END NAVBAR LOGO -->
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-none d-md-flex me-3">
              <div class="btn-list">
                <a href="https://github.com/tabler/tabler" class="btn btn-warning btn-5" target="_blank" rel="noreferrer">
                  <i class="fa-solid fa-phone-volume"></i>
                 
                 Support
                </a>
                <a href="https://github.com/sponsors/codecalm" class="btn btn-warning btn-6" target="_blank" rel="noreferrer">
                  <i class="fa-solid fa-headset"></i>
                  Help
                </a>

                <a href="https://github.com/sponsors/codecalm" class="btn btn-warning btn-6" target="_blank" rel="noreferrer">
                   <i class="fa-solid fa-person-circle-question"> </i>
                  FAQ
                </a>
              </div>
            </div>
           


            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <img :src="profileImage"  class="avatar avatar-sm rounded-circle"  style="background-image" alt="">
                <div class="d-none d-xl-block ps-2">
                  <div>Apregi</div>
                  <div class="mt-1 small text-secondary">UI Designer</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Status</a>
                <a href="./profile.html" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Feedback</a>
                <div class="dropdown-divider"></div>
                <a href="./settings.html" class="dropdown-item">Settings</a>
                <a href="./sign-in.html" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>


      <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <div class="row flex-column flex-md-row flex-fill align-items-center">
                <div class="col">
                  <!-- BEGIN NAVBAR MENU -->
                  <ul class="navbar-nav">

                   <li class="nav-item">
                    <RouterLink to="/home" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                        <i class="nav-icon fa fa-home fa-lg"></i>
                        </span>
                        <span class="nav-link-title text-warning">Home</span>
                    </RouterLink>
                    </li>

                     <li class="nav-item">
                    <RouterLink to="/our-services" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                        <i class="nav-icon fas fa-building fa-lg"></i>
                        </span>
                        <span class="nav-link-title text-warning">Profile</span>
                    </RouterLink>
                  </li>

                    <li class="nav-item">
                    <RouterLink to="/our-services" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                        <i class="nav-icon fas fa-user-doctor fa-lg"></i>
                        </span>
                        <span class="nav-link-title text-warning">our services</span>
                    </RouterLink>
                  </li>

                   <li class="nav-item">
                    <RouterLink to="/form-reservasi-client" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                          <i class="nav-icon fas fa-receipt fa-lg"></i> 
                        </span>
                        <span class="nav-link-title text-warning">Register Reservasion</span>
                    </RouterLink>
                  </li>

                  <li class="nav-item">
                    <RouterLink to="/list-check-up-client" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                        <i class="nav-icon fas fa-file-zipper fa-lg"></i>
                        </span>
                        <span class="nav-link-title text-warning">Your List Checkup</span>
                    </RouterLink>
                  </li>


                    <li class="nav-item">
                    <RouterLink to="/list-check-up-client" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                          <i class="fa-icon fas fa-location-dot fa-lg"></i>
                        </span>
                        <span class="nav-link-title text-warning">Cabang Kami</span>
                    </RouterLink>
                  </li>

                    <li class="nav-item">
                    <RouterLink to="/list-check-up-client" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                          <i class="fa-icon fas fa-people-group fa-lg"></i>
                        </span>
                        <span class="nav-link-title text-warning">Dentis Teams</span>
                    </RouterLink>
                  </li>


                  <li class="nav-item">
                    <RouterLink to="/list-check-up-client" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                          <i class="fa-icon fas fa-house-medical fa-lg"></i>
                        </span>
                        <span class="nav-link-title text-warning">Facility</span>
                    </RouterLink>
                  </li>

                  <li class="nav-item">
                    <RouterLink to="/list-check-up-client" class="nav-link">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-warning">
                          <i class="fa-icon fas fa-circle-info fa-lg"></i>
                        </span>
                        <span class="nav-link-title text-warning">infomation(Promo-Blog)</span>
                    </RouterLink>
                  </li>
                   
                  </ul>
                  <!-- END NAVBAR MENU -->
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </header>
      </div>
      <!-- END NAVBAR  -->
</template>

<style scoped>
.nav-link-icon .fa {
  font-size: 1.25rem; /* default 1rem, bisa 1.5rem kalau mau lebih gede */
}
.navbar-brand-image {
  max-width: 45px;
  height: auto;
}
</style>