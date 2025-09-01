<template>
  <!-- BEGIN NAVBAR -->
  <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
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

      <div class="navbar-nav flex-row order-md-last">
        <div class="nav-item dropdown">
          <a
            href="#"
            class="nav-link d-flex lh-1 p-0 px-2"
            data-bs-toggle="dropdown"
            aria-label="Open user menu"
          >
            <img :src="profileImage"  class="avatar avatar-sm rounded-circle"  style="background-image" alt="">
            <div class="d-none d-xl-block ps-2">
              <div>{{ user?.name || "Guest" }}</div>
              <div class="mt-1 small text-secondary">{{ user?.email || "Guest" }}</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="" class="dropdown-item">Settings</a>
            <a href="#" @click.prevent="logout" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>

      <div class="collapse navbar-collapse" id="navbar-menu">
        <!-- Kamu bisa tambahkan menu di sini -->
      </div>
    </div>
  </header>
  <!-- END NAVBAR -->
</template>

<script setup>
import { ref, onMounted } from "vue";

import { useAuthStore } from "../../store/useLoginStore";
const profileImage = '/images/avatar.jpg';
const user = ref(null);
const auth = useAuthStore();
// state user
onMounted(() => {
  const storedUser = localStorage.getItem("user");
  if (storedUser) {
    user.value = JSON.parse(storedUser);
  }
});

const logout = async () => {
 auth.logout();
};
</script>
