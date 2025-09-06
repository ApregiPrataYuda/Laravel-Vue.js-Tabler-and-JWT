<script setup>
const profileImage = '/images/avatar.jpg';
</script>

<template>
  <!--  BEGIN SIDEBAR  -->
  <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <!-- BEGIN NAVBAR TOGGLER -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebar-menu"
        aria-controls="sidebar-menu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- END NAVBAR TOGGLER -->

      <div class="navbar-brand d-flex align-items-center">
        <span class="fw-bold text-capitalize mt-2 me-2">Laravel 12 - Vue.js 3</span>
      </div>

      <hr class="my-2 border-light">

      <!-- Profile (untuk mobile) -->
      <div class="navbar-nav flex-row d-lg-none">
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown" aria-label="Open user menu">
            <img :src="profileImage" class="avatar avatar-sm rounded-circle" alt="">
            <div class="d-none d-xl-block ps-2">
              <div>Paweł Kuna</div>
              <div class="mt-1 small text-secondary">UI Designer</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="" class="dropdown-item">Settings</a>
            <a href="" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>

      <!-- BEGIN NAVBAR MENU -->
      <div class="collapse navbar-collapse" id="sidebar-menu">
        <ul class="navbar-nav">
          <li>
            <small class="d-block px-3 nav-link-icon d-md-none d-lg-inline-block text-uppercase">Administrator</small>
          </li>
          <li class="nav-item">
            <RouterLink to="/dashboard" class="nav-link">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <i class="nav-icon fa fa-home"></i>
              </span>
              <span class="nav-link-title">Home-Dashboard</span>
            </RouterLink>
          </li>
          <li class="nav-item">
            <RouterLink to="/users" class="nav-link">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <i class="nav-icon fa fa-users"></i>
              </span>
              <span class="nav-link-title">Users Data</span>
            </RouterLink>
          </li>
        </ul>
      </div>
      <!-- END NAVBAR MENU -->
    </div>
  </aside>
  <!--  END SIDEBAR  -->
</template>
