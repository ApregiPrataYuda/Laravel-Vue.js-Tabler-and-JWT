<script setup>
import FrontendLayout from '../../../layouts/FrontendLayout.vue';

const facilities = [
  {
    name: "Area Ruang Tunggu",
    description: "Kamu bisa menunggu dengan nyaman dan tenang di area ini.",
    image: "/images/branch.webp"
  },
  {
    name: "Peralatan Medis Canggih",
    description: "Fasilitas medis dengan peralatan modern untuk diagnosis cepat.",
    image: "/images/branch.webp"
  },
  {
    name: "Area Bermain Anak",
    description: "Anak-anak bisa bermain sambil menunggu dengan aman.",
    image: "/images/branch.webp"
  },
  {
    name: "Ruang Konsultasi Privat",
    description: "Privasi dijaga, cocok untuk konsultasi personal.",
    image: "/images/branch.webp"
  },
  {
    name: "Kafe dan Snack Corner",
    description: "Nikmati makanan ringan dan minuman sambil menunggu.",
    image: "/images/branch.webp"
  },
  {
    name: "Ruang Toilet Dan Wastafel",
    description: "Kebelet? Jangan Takut Kami sediakan toilet bersih dan nyaman.",
    image: "/images/branch.webp"
  }
];
</script>

<template>
<FrontendLayout>
  <div class="page d-flex flex-column">

    <section class="hero pb-0">
      <div class="container">
        <h1 class="hero-title text-center">
          Kami <span class="text-warning fw-semibold">Memiliki</span> -
          <span class="text-success fw-semibold">Fasilitas Terlengkap</span> dan Terjaga Kebersihannya
        </h1>
      </div>
    </section>

    <div class="page-wrapper">
      <!-- PAGE HEADER -->
      <div class="page-header d-print-none" aria-label="Page header">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <h2 class="page-title text-warning">Gallery Fasilitas Kami</h2>
              <div class="text-secondary mt-1 text-warning">
                Saat ini tersedia banyak fasilitas
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PAGE BODY -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row row-cards">
            <div class="col-sm-6 col-lg-4" v-for="(facility, index) in facilities" :key="index">
              <div class="card card-sm">
                <a href="#" class="d-block">
                  <img :src="facility.image" class="card-img-top" />
                </a>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <div>{{ facility.name }}</div>
                      <div class="text-secondary">{{ facility.description }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</FrontendLayout>
</template>

<style scoped>
.card-img-top {
  height: 200px;
  object-fit: cover;
}
</style>
