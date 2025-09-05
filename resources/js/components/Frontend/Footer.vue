<script setup>
const LogoCompany = '/images/logo.png'
</script>
<template>
  <!--  BEGIN FOOTER  -->
  <footer class="footer py-5" style="background: #FFD700;"> <!-- warna kuning -->
    <div class="container-xl">
      <div class="row">
        
        <!-- Kolom 1: Logo & Kontak -->
        <div class="col-md-4 mb-4">
          <img :src="LogoCompany" alt="Teman Dental" class="mb-3 brand-image" style="max-width:150px;">
          <h5 class="fw-bold">Hubungi Kami</h5>
          <ul class="list-unstyled">
            <li><i class="fa-solid fa-phone-volume"></i> 0812-1115-9191</li>
            <li><i class="fa-solid fa-comments"></i> 0812-1115-9191</li>
            <li><i class="fa-solid fa-envelope"></i> temandental@gmail.com</li>
          </ul>
        </div>

        <!-- Kolom 2: Lokasi Klinik -->
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Lokasi Teman Dental Klinik</h5>
          <ul class="list-unstyled">
            <li> <span><i class="fa-solid fa-building-wheat"></i> Teman Dental Citra Raya - Basecamp 1 </span> </li>
            <li><i class="fa-solid fa-building-wheat"></i> Teman Dental Borobudur - Basecamp 2</li>
            <li><i class="fa-solid fa-building-wheat"></i> Teman Dental Villa Regency - Basecamp 3</li>
            <li><i class="fa-solid fa-building-wheat"></i> Teman Dental Gading Serpong - Basecamp 4</li>
            <!-- dst... -->
          </ul>
        </div>

        <!-- Kolom 3: Pos Terbaru -->
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Pos Terbaru</h5>
          <ul class="list-unstyled">
            <li> <span> <i class="fa-solid fa-envelopes-bulk"></i> <a href="#" class="text-dark">Dental Check Up Rutin di Teman Dental Ciputat</a> </span></li>
            <li> <span> <i class="fa-solid fa-envelopes-bulk"></i> <a href="#" class="text-dark">Dental Check Up Rutin di Teman Dental Ciputat</a> </span></li>
            <li> <span> <i class="fa-solid fa-envelopes-bulk"></i> <a href="#" class="text-dark">Dental Check Up Rutin di Teman Dental Ciputat</a> </span></li>
            <li> <span> <i class="fa-solid fa-envelopes-bulk"></i> <a href="#" class="text-dark">Dental Check Up Rutin di Teman Dental Ciputat</a> </span></li>
          </ul>
        </div>
      </div>

      <hr class="my-3">

      <!-- Copyright -->
      <div class="text-center">
        <small>© Copyright 2023 – PT JWF Dental Medika Indonesia</small>
      </div>
    </div>
  </footer>
  <!--  END FOOTER  -->
</template>


<style scoped>
.brand-image {
  max-width: 45px;
  height: auto;
}
</style>