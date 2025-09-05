<template>
<div class="page">
  <div class="page-wrapper">
    <Header />
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
// import Navbar from '../components/Frontend/Navbar.vue';
// import Footer from '../components/Frontend/Footer.vue';
import Header from '../components/Frontend/Header.vue';
import Footer from '../components/Frontend/Footer.vue';
</script>
