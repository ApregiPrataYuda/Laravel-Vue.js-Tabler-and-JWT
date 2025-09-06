<script setup>
import FrontendLayout from '../../../layouts/FrontendLayout.vue';
import { ref } from 'vue'

const socialMedia = ref([
  { name: 'Instagram', icon: 'fab fa-instagram', link: 'https://instagram.com/yourprofile' },
  { name: 'Facebook', icon: 'fab fa-facebook', link: 'https://facebook.com/yourprofile' },
  { name: 'X/Twitter', icon: 'fab fa-x', link: 'https://twitter.com/yourprofile' },
  { name: 'TikTok', icon: 'fab fa-tiktok', link: 'https://tiktok.com/@yourprofile' },
  { name: 'Youtube', icon: 'fab fa-youtube', link: 'https://youtube.com/@yourprofile' },
  { name: 'Website Official', icon: 'fab fa-google', link: 'https://sdsd.com/@yourprofile' },
])
</script>

<template>
<FrontendLayout>
  <div class="page-wrapper">
    <div class="page-header d-print-none">
      <div class="container-xl">
        <h2 class="page-title text-warning">Kontak & Sosial Media </h2>
      </div>
    </div>

    <div class="page-body">
      <div class="container-xl">

        <!-- Contact Info Cards -->
        <div class="row row-cards mb-4">
          <div class="col-12 col-md-3" >
            <div class="card">
              <div class="card-body">
                <h3 class="card-title text-warning">Telephone or Whatsapp</h3>
                <span class="text-muted">+62 812-3456-7890</span><br>
                 <span class="text-muted">(This is just our official phone Number)</span>
                <span class="text-muted">(Don't believe anything else)</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title text-warning">Email Official</h3>
                <span class="text-muted">info@clinic.com</span><br>
                <span class="text-muted">(This is just our official email address)</span>
                <span class="text-muted">(Don't believe anything else)</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title text-warning">Head Office</h3>
                <p class="text-muted">Jl. Gatot Subroto No.Km. 3 No.96, RT.003/RW.001, Uwung Jaya, Kec. Cibodas, Kota Tangerang, Banten 15132</p>
              </div>
            </div>
          </div>

           <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title text-warning">Hour Operation</h3>
                <span class="text-muted">Senin–Jumat: 08:00–17:00</span><br>
                <span class="text-muted">Sabtu: 08:00–12:00</span><br>
                <span class="text-muted"> (all branch)</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Sosial Media -->
        <div class="card mb-4">
          <div class="card-header">
            <h3 class="card-title text-warning">Follow Us On Social Media</h3>
          </div>
          <div class="card-body d-flex gap-3 flex-wrap">
            <a v-for="social in socialMedia" :key="social.name" :href="social.link" target="_blank" class="btn btn-outline-warning d-flex align-items-center gap-2">
              <i :class="social.icon"></i> {{ social.name }}
            </a>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-warning">Send Message</h3>
          </div>
          <div class="card-body">
            <form @submit.prevent="window.alert('Pesan terkirim!')">
              <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="Nama lengkap" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Pesan</label>
                <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda..." required></textarea>
              </div>
              <button type="submit" class="btn btn-outline-warning w-100">Kirim Pesan</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</FrontendLayout>
</template>
