<script setup>
import FrontendLayout from '../../../layouts/FrontendLayout.vue';
import { ref } from 'vue'
const showSummary = (summary) => {
  alert(summary)
}
const checkupHistory = ref([
  {
    date: '2025-08-15',
    doctor: 'Dr. Siti Rahma',
    department: 'Dental',
    status: 'Completed',
    summary: 'Checkup rutin, tidak ada masalah.'
  },
  {
    date: '2025-06-10',
    doctor: 'Dr. Budi Santoso',
    department: 'General',
    status: 'Completed',
    summary: 'Cek tensi dan gula darah, semua normal.'
  },
  {
    date: '2024-12-01',
    doctor: 'Dr. Lina',
    department: 'Dental',
    status: 'Canceled',
    summary: 'Pasien tidak hadir.'
  }
])
</script>

<template>
<FrontendLayout>


  <header class="hero pb-0">
      <div class="container">
        <h3 class="hero-title">Hallo <span class="text-success fw-semibold"> Anggita </span> Saat ini<span class="text-warning fw-semibold"> Kamu bisa check </span> Riwayat <span class="text-warning fw-semibold">Kunjungan <i class="fa-solid fa-map-location-dot"></i></span> Dan History Chekup Kamu Lo </h3>
       
        <div class="my-5">
          <div class="row g-3 justify-content-center">
            <div class="col-auto">
              <RouterLink 
                to="/form-reservasi-client" 
                class="btn btn-lg btn-warning"
              >
                Yuk Registerasi Lagi dan Reservasi Sekarang
              </RouterLink>
            </div>
            
          </div>
        </div>
          </div>
    </header>


  <div class="page-wrapper">
    <div class="page-header d-print-none">
      <div class="container-xl">
        <h2 class="page-title text-warning">Checkup History</h2>
      </div>
    </div>

    <div class="page-body">
      <div class="container-xl">
        
        <div v-if="checkupHistory.length">
          <div class="row row-cards">
            <div class="col-12 col-md-6 col-lg-4" v-for="item in checkupHistory" :key="item.date">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ new Date(item.date).toLocaleDateString() }}</h3>
                </div>
                <div class="card-body">
                  <div class="mb-2">
                    <strong>Doctor:</strong> {{ item.doctor }}
                  </div>
                  <div class="mb-2">
                    <strong>Department:</strong> {{ item.department }}
                  </div>
                  <div class="mb-2">
                    <span 
                      :class="{
                        'badge bg-green-lt': item.status === 'Completed',
                        'badge bg-yellow-lt': item.status === 'Pending',
                        'badge bg-red-lt': item.status === 'Canceled'
                      }"
                    >
                      {{ item.status }}
                    </span>
                  </div>
                  <div>
                   <button class="btn  btn-outline-warning w-100" @click="showSummary(item.summary)">
                    Lihat Detail
                  </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div v-else class="empty">
          <div class="empty-img">
            <img src="" alt="No data">
          </div>
          <p class="empty-title">Oops… Kamu Tidak Punya Checkup History</p>
          <p class="empty-subtitle text-secondary">Coba lakukan checkup pertama kamu sekarang!</p>
          <div class="empty-action">
            <a href="/." class="btn btn-primary">
              <!-- Icon Tabler -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z"/>
                <line x1="5" y1="12" x2="19" y2="12"/>
                <line x1="5" y1="12" x2="11" y2="18"/>
                <line x1="5" y1="12" x2="11" y2="6"/>
              </svg>
              Take me home
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</FrontendLayout>
</template>
