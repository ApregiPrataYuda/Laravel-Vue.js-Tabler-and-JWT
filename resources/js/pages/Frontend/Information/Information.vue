<script setup>
import FrontendLayout from '../../../layouts/FrontendLayout.vue';
import { ref } from 'vue'

const informations = ref([
  {
    title: "Protokol Kesehatan",
    date: "2025-09-01",
    content: "Selalu gunakan masker dan cuci tangan sebelum dan sesudah checkup."
  },
  {
    title: "Jam Operasional",
    date: "2025-09-01",
    content: "Senin–Jumat: 08:00–17:00, Sabtu: 08:00–12:00"
  },
  {
    title: "Tips Perawatan Gigi",
    date: "2025-08-20",
    content: "Sikat gigi dua kali sehari, dan jangan lupa flossing."
  }
])

const promos = ref([
  {
    title: "Diskon Checkup Gigi",
    date: "2025-09-05",
    description: "Dapatkan diskon 20% untuk checkup gigi rutin bulan ini bulan September!",
    image: "/images/promo2.webp"
  },
  {
    title: "Diskon Member Baru dan Lama",
    date: "2025-09-01",
    description: "Konsultasi gratis untuk pasien baru selama bulan September.",
    image: "/images/promo.webp"
  },
  {
    title: "Gratis Konsultasi",
    date: "2025-09-01",
    description: "Konsultasi gratis untuk pasien baru selama bulan September.",
    image: "/images/promo2.webp"
  }
])


const blogs = ref([
  {
    title: "5 Tips Menjaga Kesehatan Gigi",
    date: "2025-09-01",
    excerpt: "Menjaga kesehatan gigi itu penting. Berikut 5 tips mudah yang bisa kamu lakukan setiap hari...",
    image: "/images/blog.webp"
  },
  {
    title: "Pentingnya Checkup Rutin",
    date: "2025-08-20",
    excerpt: "Checkup rutin membantu mendeteksi masalah lebih awal dan menjaga kesehatan secara keseluruhan...",
     image: "/images/blog.webp"
  },
  {
    title: "Cara Mengurangi Sensitivitas Gigi",
    date: "2025-08-10",
    excerpt: "Jika gigi terasa sensitif, ada beberapa cara sederhana yang bisa kamu lakukan untuk mengurangi rasa nyeri...",
     image: "/images/blog.webp"
  }
])
</script>

<template>
<FrontendLayout>


     <div class="page-wrapper">
    <div class="page-header d-print-none">
      <div class="container-xl">
        <h2 class="page-title text-warning">Promo</h2>
      </div>
    </div>

    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-12 col-md-6 col-lg-4" v-for="promo in promos" :key="promo.title">
            <div class="card">
              <div class="card-img-top">
                <img :src="promo.image" alt="Promo Image" class="img-fluid rounded-top">
              </div>
              <div class="card-body">
                <h3 class="card-title">{{ promo.title }}</h3>
                <p class="text-muted">{{ promo.date }}</p>
                <p>{{ promo.description }}</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-outline-primary w-100" @click="alert(promo.description)">
                  Lihat Detail
                </button>
              </div>
            </div>
          </div>
        </div>

        <div v-if="promos.length === 0" class="empty">
          <div class="empty-img">
            <img src="" alt="No promo">
          </div>
          <p class="empty-title">Belum Ada Promo</p>
          <p class="empty-subtitle text-secondary">Promo terbaru akan muncul di sini</p>
        </div>
      </div>
    </div>
  </div>







   <div class="page-wrapper">
    <div class="page-header d-print-none">
      <div class="container-xl">
        <h2 class="page-title text-warning">Blog</h2>
      </div>
    </div>

    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-12 col-md-6 col-lg-4" v-for="blog in blogs" :key="blog.title">
            <div class="card">
              <div class="card-img-top">
                <img :src="blog.image" alt="Blog Image" class="img-fluid rounded-top">
              </div>
              <div class="card-body">
                <h3 class="card-title">{{ blog.title }}</h3>
                <p class="text-muted">{{ blog.date }}</p>
                <p>{{ blog.excerpt }}</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-outline-primary w-100" @click="alert(blog.excerpt)">
                  Baca Selengkapnya
                </button>
              </div>
            </div>
          </div>
        </div>

        <div v-if="blogs.length === 0" class="empty">
          <div class="empty-img">
            <img src="" alt="No blog">
          </div>
          <p class="empty-title">Belum Ada Artikel Blog</p>
          <p class="empty-subtitle text-secondary">Artikel terbaru akan muncul di sini</p>
        </div>
      </div>
    </div>
  </div>


    <div class="page-wrapper">
    <div class="page-header d-print-none">
      <div class="container-xl">
        <h2 class="page-title text-warning">Information</h2>
      </div>
    </div>

    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-12 col-md-6" v-for="info in informations" :key="info.title">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ info.title }}</h3>
                <div class="card-actions">
                  <span class="badge bg-gray-lt">{{ info.date }}</span>
                </div>
              </div>
              <div class="card-body">
                <p>{{ info.content }}</p>
              </div>
            </div>
          </div>
        </div>

        <div v-if="informations.length === 0" class="empty">
          <div class="empty-img">
            <img src="" alt="No information">
          </div>
          <p class="empty-title">Belum Ada Informasi</p>
          <p class="empty-subtitle text-secondary">Informasi terbaru akan muncul di sini</p>
        </div>
      </div>
    </div>
  </div>
</FrontendLayout>
</template>
