<script setup>
import { LMap, LTileLayer, LMarker, LPopup } from "@vue-leaflet/vue-leaflet"
import FrontendLayout from '../../../layouts/FrontendLayout.vue';
import "leaflet/dist/leaflet.css"
import { ref } from 'vue'
const imagesbarnch1 = "/images/branch.webp";
const branches = [
  { 
    name: "Karawaci", 
    position: [-6.2150964849617605, 106.6014857953977],
    image: "/images/branch.webp"
  },
  { 
    name: "Villa Regency", 
    position: [-6.170655533241663, 106.595685918708],
    image: "/images/branch2.webp"
  },
  { 
    name: "Alam Sutera", 
    position: [-6.249858626371929, 106.65051619988229],
    image: "/images/branch3.webp"
  },
]

const mapRef = ref(null)
const showModal = ref(false)
const selectedImage = ref('')

const goToBranch = (position) => {
  if (mapRef.value && mapRef.value.mapObject) {
    mapRef.value.mapObject.setView(position, 13)
  }
}

const openImage = (img) => {
  selectedImage.value = img
  showModal.value = true
}
</script>

<template>
  <FrontendLayout>


     <header class="hero pb-0">
      <div class="container">
        <h3 class="hero-title">Saat ini<span class="text-warning fw-semibold"> Cabang Kami </span> Tersebar <span class="text-warning fw-semibold">di <i class="fa-solid fa-map-location-dot"></i></span> wilayah Dibawah ?  Jangan Lupa <span class="text-success fw-semibold">Kunjungi dan Reservasi</span> Sekarang </h3>
        <p class="hero-description text-warning">
          Gigi sehat dan senyum indah, kini bukan lagi  impian!
          Semua orang sekarang bisa tampil keren bersama Teman Dental,
          Harga Temen Bikin Demen.
        </p>
        <div class="my-5">
          <div class="row g-3 justify-content-center">
            <div class="col-auto">
              <RouterLink 
                to="/form-reservasi-client" 
                class="btn btn-lg btn-warning"
              >
                Registerasi dan Reservasi
              </RouterLink>
            </div>
            
          </div>
        </div>
          </div>
    </header>



    <div class="page-body">
      <div class="container-xl">
        <div class="row">
          <!-- Peta -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-body p-0">
                <LMap
                  ref="mapRef"
                  style="height: 500px; width: 100%"
                  :zoom="11"
                  :center="[-6.2150964849617605, 106.6014857953977]"
                >
                  <LTileLayer url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png" />
                  <LMarker
                    v-for="(branch, i) in branches"
                    :key="i"
                    :lat-lng="branch.position"
                  >
                    <LPopup>
                      <div class="text-center">
                        <h6>{{ branch.name }}</h6>
                        <img 
                          :src="branch.image" 
                          alt="" 
                          style="width: 100%; max-width: 150px; border-radius: 8px; cursor: pointer;"
                          @click="openImage(branch.image)"
                        />
                      </div>
                    </LPopup>
                  </LMarker>
                </LMap>
              </div>
            </div>
          </div>

          <!-- List Cabang -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title text-warning">Daftar Cabang</h5>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li
                    class="list-group-item text-warning"
                    v-for="(branch, i) in branches"
                    :key="i"
                    @click="goToBranch(branch.position)"
                    style="cursor: pointer;"
                  >
                    {{ branch.name }}
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>




    <div class="page-wrapper">
        <!-- BEGIN PAGE HEADER -->
        <div class="page-header d-print-none" aria-label="Page header">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title text-warning">Gallery Cabang Kami</h2>
                <div class="text-secondary mt-1 text-warning">Saat ini 3 cabang</div>
              </div>
              <!-- Page title actions -->
             
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"
                    ><img :src="imagesbarnch1" class="card-img-top"
                  /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded"> <i class="fa-solid fa-map-location-dot"></i></span>
                      <div>
                        <div>Branch Karawaci</div>
                        <div class="text-secondary">08.00-22.00 WIB</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                           <i class="fas fa fa-eye"></i>
                          Total Visit 600 / Month
                        </a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img :src="imagesbarnch1" class="card-img-top" /></a>
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                      <span class="avatar avatar-2 me-3 rounded"> <i class="fa-solid fa-map-location-dot"></i></span>
                      <div>
                        <div>Branch Villa Regency</div>
                        <div class="text-secondary">08.00-22.00 WIB</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                           <i class="fas fa fa-eye"></i>
                          Total Visit 467 / Month
                        </a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="#" class="d-block"><img :src="imagesbarnch1" class="card-img-top" /></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                       <span class="avatar avatar-2 me-3 rounded"> <i class="fa-solid fa-map-location-dot"></i></span>
                      <div>
                        <div>Branch Alam Sutera</div>
                        <div class="text-secondary">08.00-22.00 WIB</div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-secondary">
                           <i class="fas fa fa-eye"></i>
                          Total Visit 100 / Month
                        </a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>
              </div>







    <!-- Modal untuk gambar besar -->
    <div class="modal fade" tabindex="-1" :class="{ show: showModal }" style="display: block;" v-if="showModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body p-0">
            <img :src="selectedImage" alt="" class="img-fluid w-100"/>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" @click="showModal = false">Tutup</button>
          </div>
        </div>
      </div>
      <div class="modal-backdrop fade show" @click="showModal = false"></div>
    </div>
  </FrontendLayout>
</template>
