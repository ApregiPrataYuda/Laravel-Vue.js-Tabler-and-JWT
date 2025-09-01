<template>
<div class="page">
  <Sidebar />
  <div class="page-wrapper">
    <Navbar />
    <div class="page-body">
      <div class="container-xl">
        <slot />
      </div>
    </div>
    <Footer />
  </div>
</div>

</template>

<script setup>
import Navbar from "@/components/Backend/Navbar.vue";
import Sidebar from "@/components/Backend/Sidebar.vue";
import Footer from "@/components/Backend/Footer.vue";
</script>
