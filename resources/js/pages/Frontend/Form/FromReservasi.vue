<script setup>

import FrontendLayout from '../../../layouts/FrontendLayout.vue';
import { ref } from 'vue'

// Contoh state untuk binding
const fullName = ref('')
const email = ref('')
const password = ref('')
const address = ref('')
const gender = ref('')
const subscribe = ref('')
const agree = ref(false)

const submitForm = () => {
  console.log({
    fullName: fullName.value,
    email: email.value,
    password: password.value,
    address: address.value,
    gender: gender.value,
    subscribe: subscribe.value,
    agree: agree.value
  })
}
</script>




<template>
<FrontendLayout>

 <header class="hero pb-0">
      <div class="container">
        <h1 class="hero-title"><span class="text-warning fw-semibold">Registrasi <i class="fa-solid fa-cash-register"></i></span> Dan <span class="text-warning fw-semibold">Reservasi</span> Sekarang & Dapatkan <span class="text-success fw-semibold">cashback <i class="fa-solid fa-sack-dollar"></i></span> dan promo menarik! <span class="text-success fw-semibold"> <i class="fa-solid fa-receipt"></i></span>  </h1>
        <p class="hero-description text-warning">
          Gigi sehat dan senyum indah, kini bukan lagi  impian!
          Semua orang sekarang bisa tampil keren bersama Teman Dental,
          Harga Temen Bikin Demen.
        </p>
        <div class="my-5">
          <div class="row g-3 justify-content-center">
            <div class="col-auto">
              <RouterLink 
                to="/our-services" 
                class="btn btn-lg btn-warning"
              >
                Check Layanan Yang Tersedia
              </RouterLink>
            </div>
            
          </div>
        </div>
          </div>
    </header>


<div class="page d-flex flex-column">

  <!-- Page Header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle text-warning">Overview</div>
          <h2 class="page-title text-warning">Registration Form</h2>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Registration Form</li>
            </ol>
          </nav> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Page Body -->
    <div class="page-body" style="padding-bottom: 400px;">
  <div class="container-xl">
      <div class="row g-4">
        <!-- Form Kiri -->
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title text-warning">Data Pasien</h3>
            </div>
            <div class="card-body">
             
                <div class="mb-3">
                  <label for="fullname" class="form-label text-warning">Nama lengkap</label>
                  <input type="text" class="form-control" id="fullname" placeholder="Enter Nama lengkap">
                </div>

                <div class="mb-3">
                  <label for="no_telephone" class="form-label text-warning">Nomor telepon / WhatsApp</label>
                  <input type="number" class="form-control" id="no_telephone" placeholder="Enter No telepon / WhatsApp">
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label text-warning">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                  <label for="tanggal_lahir" class="form-label text-warning">Tanggal lahir (opsional, untuk data rekam medis)</label>
                  <input type="date" class="form-control" id="tanggal_lahir">
                </div>

                <div class="mb-3">
                  <label for="role" class="form-label text-warning">Pilih Klinik</label>
                  <select class="form-select" id="role">
                    <option value="Select">Select</option>
                    <option value="Teman Dental Citra Raya">Teman Dental Citra Raya</option>
                    <option value="Teman Dental Gading Serpong">Teman Dental Gading Serpong</option>
                    <option value="Teman Dental Ciputat">Teman Dental Ciputat</option>
                    <option value="Teman Dental Alam Sutera">Teman Dental Alam Sutera</option>
                    <option value="Teman Dental Villa Regency">Teman Dental Villa Regency</option>
                    <option value="Teman Dental Borobudur Karawaci">Teman Dental Borobudur Karawaci</option>
                  </select>
                </div>
               
            </div>
          </div>
        </div>

        <!-- Form Kanan -->
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title text-warning">Detail Reservasi</h3>
            </div>
            <div class="card-body">
            
                <div class="mb-3">
                  <label for="last_name" class="form-label text-warning">Tanggal kunjungan</label>
                 <input type="date" class="form-control" id="tanggal_lahir">
                </div>

                <div class="mb-3">
                  <label for="role" class="form-label text-warning">Jam kunjungan</label>
                  <select class="form-select" id="role">
                        <option value="Select">Select</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                  </select>
                </div>


                <div class="mb-3">
                  <label for="last_name" class="form-label text-warning">Dokter gigi (opsional)</label>
                 <input type="date" class="form-control" id="tanggal_lahir">
                </div>

                <div class="mb-3">
                  <label for="role" class="form-label text-warning">Jenis layanan / keluhan</label>
                  <select class="form-select" id="role">
                        <option value="Select">Select</option>
                    <option value="Scaling gigi">Scaling gigi</option>
                    <option value="Cabut gigi">Cabut gigi</option>
                    <option value="Tambal gigi">Tambal gigi</option>
                    <option value="Behel / ortho">Behel / ortho</option>
                    <option value="Konsultasi">Konsultasi</option>
                  </select>
                </div>

                <div class="form-footer">
                  <button type="submit" class="btn btn-warning w-100">Submit</button>
                </div>
             
            </div>
          </div>
        </div>

      </div> <!-- row -->
    </div> <!-- container -->
  </div> <!-- page-body -->

</div>
</FrontendLayout>
</template>