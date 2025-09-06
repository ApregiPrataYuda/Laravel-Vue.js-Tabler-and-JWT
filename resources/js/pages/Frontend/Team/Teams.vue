<script setup>
import FrontendLayout from '../../../layouts/FrontendLayout.vue';
import { ref } from 'vue';

const imagesDoctor = ref('/images/avatar-2.jpg')
const imagesDoctor2 = ref('/images/avatar-3.jpg')
const imagesNurse = ref('/images/avatar-5.jpg')
const imagesNurses = ref('/images/avatar-1.jpg')
const imagesNursess = ref('/images/avatar-4.jpg')
const imagesNursesss = ref('/images/avatar-6.jpg')
</script>

<template>
  <FrontendLayout>


     <header class="hero pb-0 ">
  <div class="container">
    <h1 class="hero-title">
      Bersama kami, kamu akan ditangani oleh<span class="text-warning fw-semibold"> tim dokter dan perawat profesional </span>  
      <span class="text-warning fw-semibold">yang kompeten di bidangnya masing-masing <i class="fa-solid fa-user-nurse"></i></span> 
      siap memberikan pelayanan terbaik untuk senyum indahmu. <span class="text-success fw-semibold">Yuks Reservasi</span> Sekarang 
    </h1>

    <p class="hero-description text-warning">
      Gigi sehat dan senyum indah, kini bukan lagi impian!  
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



    <div class="page-body shadow-lg border-0 rounded-3">
      <div class="container-xl">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-warning">Team Doctor & Perawat</h3>
          </div>
          <div class="card-body">
            <div class="row row-cards">

              <!-- Card Doctor -->
              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body text-center">
                    <img
                      :src="imagesDoctor"
                      alt="Doctor"
                      class="avatar avatar-xl mb-3 rounded"
                    />
                    <h4 class="mb-1">
                      <a href="#" class="text-reset">Dr. John Doe</a>
                    </h4>
                    <div class="text-muted">Spesialis Gigi</div>
                    <span class="badge bg-warning-lt mt-2">Owner</span>
                  </div>
                  <div class="card-footer d-flex">
                    <a href="mailto:doctor@example.com" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-square-envelope"></i> Konsultasi  By Email
                    </a>
                    <a href="tel:+628123456789" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-phone-volume"></i> Konsultasi By Phone
                    </a>
                  </div>
                </div>
              </div>

              <!-- Card Perawat -->
              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body text-center">
                    <img
                      :src="imagesDoctor2"
                      alt="Perawat"
                      class="avatar avatar-xl mb-3 rounded"
                    />
                    <h4 class="mb-1">
                      <a href="#" class="text-reset">Suster Maria</a>
                    </h4>
                    <div class="text-muted">Perawat Senior</div>
                    <span class="badge bg-warning-lt mt-2">Cabang Karawaci</span>
                  </div>
                  <div class="card-footer d-flex">
                    <a href="mailto:maria@example.com" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-square-envelope"></i> Konsultasi  By Email
                    </a>
                    <a href="tel:+628987654321" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-phone-volume"></i> Konsultasi By Phone
                    </a>
                  </div>
                </div>
              </div>

              <!-- Card Perawat -->
              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body text-center">
                    <img
                      :src="imagesNurse"
                      alt="Perawat"
                      class="avatar avatar-xl mb-3 rounded"
                    />
                    <h4 class="mb-1">
                      <a href="#" class="text-reset">Suster Lilis</a>
                    </h4>
                    <div class="text-muted">Perawat</div>
                    <span class="badge bg-warning-lt mt-2">Cabang Jakarta</span>
                  </div>
                  <div class="card-footer d-flex">
                    <a href="mailto:lilis@example.com" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-square-envelope"></i> Konsultasi  By Email
                    </a>
                    <a href="tel:+628555666777" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-phone-volume"></i> Konsultasi By Phone
                    </a>
                  </div>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body text-center">
                    <img
                      :src="imagesNursesss"
                      alt="Perawat"
                      class="avatar avatar-xl mb-3 rounded"
                    />
                    <h4 class="mb-1">
                      <a href="#" class="text-reset">Nubuga Ngaga</a>
                    </h4>
                    <div class="text-muted">Perawat Senior</div>
                    <span class="badge bg-warning-lt mt-2">Cabang Bogor</span>
                  </div>
                  <div class="card-footer d-flex">
                    <a href="mailto:maria@example.com" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-square-envelope"></i> Konsultasi  By Email
                    </a>
                    <a href="tel:+628987654321" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-phone-volume"></i> Konsultasi By Phone
                    </a>
                  </div>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body text-center">
                    <img
                      :src="imagesNursess"
                      alt="Perawat"
                      class="avatar avatar-xl mb-3 rounded"
                    />
                    <h4 class="mb-1">
                      <a href="#" class="text-reset">Suster Maria</a>
                    </h4>
                    <div class="text-muted">Perawat Senior</div>
                    <span class="badge bg-warning-lt mt-2">Cabang Bekasi</span>
                  </div>
                  <div class="card-footer d-flex">
                    <a href="mailto:maria@example.com" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-square-envelope"></i> Konsultasi  By Email
                    </a>
                    <a href="tel:+628987654321" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-phone-volume"></i> Konsultasi By Phone
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card shadow-sm">
                  <div class="card-body text-center">
                    <img
                      :src="imagesNurses"
                      alt="Perawat"
                      class="avatar avatar-xl mb-3 rounded"
                    />
                    <h4 class="mb-1">
                      <a href="#" class="text-reset">Sandy Mondy</a>
                    </h4>
                    <div class="text-muted">Perawat Senior</div>
                    <span class="badge bg-warning-lt mt-2">Cabang Tangerang</span>
                  </div>
                  <div class="card-footer d-flex">
                    <a href="mailto:maria@example.com" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-square-envelope"></i> Konsultasi  By Email
                    </a>
                    <a href="tel:+628987654321" class="text-muted flex-fill text-center">
                      <i class="fa-solid fa-phone-volume"></i> Konsultasi By Phone
                    </a>
                  </div>
                </div>
              </div>

            </div> <!-- row -->
          </div>
        </div>
      </div>
    </div>



    <div class="page-wrapper shadow-lg border-0 rounded-3">
        <!-- BEGIN PAGE HEADER -->
        <div class="page-header d-print-none" aria-label="Page header">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h1 class="page-title text-warning">Kenapa Harus kami ?</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body card-warning">
                    <div class="accordion" id="accordion-default">
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-default" aria-expanded="true">
                            What makes Tabler different from other UI frameworks?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-1"
                              >
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="collapse-1-default" class="accordion-collapse collapse show" data-bs-parent="#accordion-default">
                          <div class="accordion-body">
                            Tabler offers a modern, responsive design with a clean aesthetic, built on Bootstrap for ease of use and flexibility.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-2-default"
                            aria-expanded="false"
                          >
                            How can I customize Tabler components to fit my design needs?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-1"
                              >
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="collapse-2-default" class="accordion-collapse collapse" data-bs-parent="#accordion-default">
                          <div class="accordion-body">
                            You can customize Tabler components using CSS variables, SCSS, and utility classes to match your design preferences.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-3-default"
                            aria-expanded="false"
                          >
                            Is Tabler optimized for performance and fast loading times?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-1"
                              >
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="collapse-3-default" class="accordion-collapse collapse" data-bs-parent="#accordion-default">
                          <div class="accordion-body">
                            Yes, Tabler is lightweight, optimized for modern browsers, and follows best practices for fast loading and efficiency.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-4-default"
                            aria-expanded="false"
                          >
                            How accessible are Tabler components?
                            <div class="accordion-button-toggle">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-down -->
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-1"
                              >
                                <path d="M6 9l6 6l6 -6" />
                              </svg>
                            </div>
                          </button>
                        </div>
                        <div id="collapse-4-default" class="accordion-collapse collapse" data-bs-parent="#accordion-default">
                          <div class="accordion-body">
                            Tabler components follow WAI-ARIA standards and support keyboard navigation, screen readers, and accessibility best practices.
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
              </div>
             
  </FrontendLayout>
</template>
