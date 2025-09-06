
<script setup>
import FrontendLayout from '../../../layouts/FrontendLayout.vue';
import AOS from "aos";
import "aos/dist/aos.css";
import { ref, onMounted } from 'vue'
const BranchCompany = "/images/branch.webp";

// Kalau mau animasi, install dulu AOS:
// npm install aos
// lalu import CSS & inisialisasi


onMounted(() => {
  AOS.init({
    duration: 1000,
    once: true, // animasi hanya jalan sekali
  });
});
</script>

<template>
<FrontendLayout>
<div class="page d-flex flex-column">

  
 <section class="hero pb-0">
    <div class="container">
      <h1 class="hero-title text-center">
        Kenali <span class="text-warning fw-semibold">Teman Dental</span> -
        <span class="text-success fw-semibold">Sahabat Senyum Sehat</span> Anda
      </h1>
      <p class="hero-description text-center text-warning">
        Teman Dental hadir sebagai solusi perawatan gigi modern yang nyaman, profesional, dan terjangkau.
        Kami percaya bahwa senyum sehat adalah investasi jangka panjang untuk setiap orang.
      </p>
    </div>
  </section>



  <section class="about-section my-5 py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Gambar -->
      <div class="col-md-6" data-aos="fade-right">
        <img 
          :src="BranchCompany" 
          alt="Tentang Kami"
          class="img-fluid rounded-4 shadow"
        />
      </div>

      <!-- Konten -->
      <div class="col-md-6" data-aos="fade-left">
        <h2 class="fw-bold text-warning mb-3">Tentang Kami</h2>
        <p class="text-muted">
          <strong>Teman Dental</strong> adalah perusahaan layanan kesehatan gigi 
          yang berdiri dengan komitmen memberikan pelayanan terbaik untuk semua kalangan.
          Sejak awal berdiri, kami percaya bahwa setiap orang berhak memiliki 
          senyum sehat dan percaya diri tanpa harus khawatir dengan biaya yang tinggi.
        </p>
        <p class="text-muted">
          Dengan tim dokter gigi profesional, teknologi modern, serta pelayanan 
          yang ramah, kami hadir sebagai <span class="fw-semibold text-success">sahabat 
          terpercaya</span> dalam menjaga kesehatan gigi Anda.
        </p>
        <RouterLink to="/about" class="btn btn-lg btn-warning mt-3">
          Selengkapnya
        </RouterLink>
      </div>

    </div>
  </div>
</section>








  <!-- Parallax Section -->
  <section class="parallax-section text-white my-5 rounded-3">
    <div class="overlay"></div>
    <div class="container py-5">
      <div class="row g-4 justify-content-center">

        <!-- Card Visi -->
        <div class="col-md-5">
          <div class="card shadow-lg border-0 rounded-3" data-aos="fade-up">
            <div class="card-body text-center p-4">
              <h2 class="text-success fw-bold mb-3">Visi</h2>
              <p class="text-muted">
                Menjadi mitra terpercaya dalam memberikan layanan kesehatan gigi terbaik,
                sehingga setiap orang dapat tersenyum dengan percaya diri.
              </p>
            </div>
          </div>
        </div>

        <!-- Card Misi -->
        <div class="col-md-5">
          <div class="card shadow-lg border-0 rounded-3" data-aos="fade-up" data-aos-delay="200">
            <div class="card-body p-4">
              <h2 class="text-warning fw-bold mb-3 text-center">Misi</h2>
              <ul class="text-muted text-start">
                <li>Memberikan layanan kesehatan gigi yang berkualitas, aman, dan nyaman.</li>
                <li>Menghadirkan solusi perawatan gigi yang terjangkau bagi semua kalangan.</li>
                <li>Mengedukasi masyarakat akan pentingnya menjaga kesehatan gigi dan mulut.</li>
                <li>Membangun hubungan jangka panjang dengan pasien melalui pelayanan ramah dan profesional.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>




  </div>
  
</FrontendLayout>
</template>



<style scoped>
/* .parallax-section {
  position: relative;
  background-image: url('https://images.unsplash.com/photo-1588776814546-3f5b5bb274b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
} */

.parallax-section {
  position: relative;
  background: #ffffff; /* full putih */
}

.parallax-section .overlay {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(255, 255, 255, 0.5);
}
.parallax-section .container {
  position: relative;
  z-index: 2;
}

.about-section {
  background: #fdfdfd; /* putih soft */
  border-radius: 20px;
}

</style>