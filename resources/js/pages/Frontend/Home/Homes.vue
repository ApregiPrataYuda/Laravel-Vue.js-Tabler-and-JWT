<template>
  <FrontendLayout>

    <header class="hero pb-0">
      <div class="container">
        <h1 class="hero-title">Mau Cari Yang <span class="text-warning">Pasti - Pasti</span> Aja?  <span class="text-warning">PASTI</span> Cuma <span class="text-warning"> <i class="fa-solid fa-house-medical-circle-check"></i> Teman Dental</span> yang Bisa!</h1>
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
                class="btn btn-lg"
              >
                Layanan Kami
              </RouterLink>
            </div>
            <div class="col-auto">
               <RouterLink 
                to="/form-reservasi-client" 
                class="btn btn-lg btn-warning"
              >
                Reservasi Sekarang
              </RouterLink>
            </div>
          </div>
        </div>

        
            <div class="page-body">
      <div class="container-xl">
        <div
          class="card border-0 shadow-sm rounded-3 overflow-hidden mb-4"
          style="max-height: 420px"
        >
          <div class="card-body p-0">
            <!-- Carousel -->
            <div
              id="carouselExampleIndicators"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <!-- Indicator -->
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>

              <!-- Slides -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img 
                        :src="BannerCompany" 
                        class="d-block w-100" 
                        alt="Banner" 
                        style="height: 265px; object-fit: cover;"
                    >
                </div>

                <div class="carousel-item active">
                    <img 
                        :src="BannerCompany" 
                        class="d-block w-100" 
                        alt="Banner" 
                        style="height: 265px; object-fit: cover;"
                    >
                </div>

                <div class="carousel-item active">
                    <img 
                        :src="BannerCompany" 
                        class="d-block w-100" 
                        alt="Banner" 
                        style="height: 265px; object-fit: cover;"
                    >
                </div>
              </div>

              <!-- Controls -->
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
          </div>
    </header>

    



   <section class="section section-light">
  <div class="container-xl">
    <div class="section-header text-center mb-5">
      <h2 class="section-title">Everything you need to deploy your app</h2>
      <div class="section-description text-secondary">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </div>
    </div>

    <div class="row g-4 align-items-center">
      <!-- Features -->
      <div class="col-lg-6">
        <div class="d-flex flex-column gap-4">
          <!-- Feature 1 -->
          <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex">
              <div class="shape shape-md me-3 text-primary">
                <i class="fa-solid fa-rupiah-sign"></i>
              </div>
              <div>
                <h3 class="h4 mb-2">Pasti Harganya</h3>
                <p class="text-secondary mb-0">
                  Tabler is fully responsive and compatible with all modern browsers. Thanks to its modern, user-friendly design you can create a fully
                  functional interface that users will love.
                </p>
              </div>
            </div>
          </div>

           <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex">
              <div class="shape shape-md me-3 text-primary">
                <i class="fa-solid fa-pump-medical"></i>
              </div>
              <div>
                <h3 class="h4 mb-2">Pasti Treatmentnya</h3>
                <p class="text-secondary mb-0">
                  Tabler is fully responsive and compatible with all modern browsers. Thanks to its modern, user-friendly design you can create a fully
                  functional interface that users will love.
                </p>
              </div>
            </div>
          </div>

          

          <!-- Feature 2 -->
          <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex">
              <div class="shape shape-md me-3 text-success">
                <i class="fa-solid fa-suitcase-medical"></i>
              </div>
              <div>
                <h3 class="h4 mb-2">Dokter Profesional</h3>
                <p class="text-secondary mb-0">
                  Having in mind what it takes to write high-quality code, we want to help you speed up the development process and keep your code clean.
                  Based on Bootstrap 5, Tabler is cutting-edge, compatible with all modern browsers.
                </p>
              </div>
            </div>
          </div>

          <!-- Feature 3 -->
          <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex">
              <div class="shape shape-md me-3 text-warning">
                  <i class="fa-solid fa-house-medical-circle-check"></i>
              </div>
              <div>
                <h3 class="h4 mb-2">Pasti Nyamanya</h3>
                <p class="text-secondary mb-0">
                  You can easily customize the UI elements to make them fit the needs of your project. Even if you’re a beginner – Tabler is easy to start with!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Image / Illustration -->
      <div class="col-lg-6 text-center">
  <div 
    class="card border-0 shadow-sm rounded-3 overflow-hidden p-3"
    style="transition: transform 0.3s ease, box-shadow 0.3s ease;"
    @mouseover="event.currentTarget.style.transform='scale(1.02)'; event.currentTarget.style.boxShadow='0 6px 20px rgba(0,0,0,0.15)';"
    @mouseleave="event.currentTarget.style.transform='scale(1)'; event.currentTarget.style.boxShadow='0 2px 10px rgba(0,0,0,0.08)';"
  >
    <img 
      :src="BranchCompany" 
      alt="Our Branch" 
      class="img-fluid rounded-3"
    >
    <div class="card-body">
      <h5 class="card-title mb-1">Cabang Kami</h5>
      <p class="text-secondary mb-0">Kunjungi klinik gigi kami di lokasi terdekat Anda.</p>
    </div>
  </div>
</div>
</div>

  </div>
</section>





 <section class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Trusted by hundreds</h2>
          <p class="section-description">Our Users send us bunch of smilies with our services, and we love them 😍</p>
        </div>
        <div class="row g-lg-6">
          <div class="col-md-6 col-lg-4">
            <div class="row g-lg-6">
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Jeffie Lewzey</h3>
                        <div class="text-secondary">Chemical Engineer</div>
                      </div>
                    </div>
                    <p>
                      Ever since I started using Tabler, my HTML designing process has been significantly smoother. Its intuitive interface is a breath of fresh
                      air!
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Mallory Hulme</h3>
                        <div class="text-secondary">Geologist IV</div>
                      </div>
                    </div>
                    <p>
                      I'm beyond impressed with Tabler. This UI kit has transformed my workflow for the better. It's easy to use, streamlined, and remarkably
                      efficient.
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Dunn Slane</h3>
                        <div class="text-secondary">Research Nurse</div>
                      </div>
                    </div>
                    <p>
                      Tabler's feature-rich package has drastically improved my website design process. It's an absolute game-changer in the UI kit landscape.
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="row g-lg-6">
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Emmy Levet</h3>
                        <div class="text-secondary">VP Product Management</div>
                      </div>
                    </div>
                    <p>
                      Having used many UI kits in the past, I can confidently say that Tabler stands out. The level of customization it offers is unparalleled.
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Maryjo Lebarree</h3>
                        <div class="text-secondary">Civil Engineer</div>
                      </div>
                    </div>
                    <p>What I love about Tabler is its sleek design and ease of use. It's really simplified my HTML designing work. Five stars from me!</p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Egan Poetz</h3>
                        <div class="text-secondary">Research Nurse</div>
                      </div>
                    </div>
                    <p>
                      I'd recommend Tabler to anyone, whether they're a seasoned pro or a beginner in HTML design. Its versatility and user-friendly nature make
                      it a cut above the rest.
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="row g-lg-6">
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Kellie Skingley</h3>
                        <div class="text-secondary">Teacher</div>
                      </div>
                    </div>
                    <p>
                      Navigating through Tabler has been a breeze! Its intuitive layout helps me save time and focus more on the creative aspect of my work.
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Christabel Charlwood</h3>
                        <div class="text-secondary">Tax Accountant</div>
                      </div>
                    </div>
                    <p>
                      With Tabler, designing HTML has never been more straightforward. The kit's sleek features and functionalities have taken my design work to
                      new heights.
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-12">
                <a href="#" class="card bg-surface-secondary">
                  <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-auto"><span class="avatar avatar-md"> <img :src="profileImage" alt=""> </span></div>
                      <div class="col">
                        <h3 class="h3 m-0">Haskel Shelper</h3>
                        <div class="text-secondary">Staff Scientist</div>
                      </div>
                    </div>
                    <p>
                      Tabler has revolutionized the way I approach HTML design. Its array of tools and efficient interface make it a must-have for any designer.
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




     <div class="page-wrapper">
        <!-- BEGIN PAGE HEADER -->
        <div class="page-header d-print-none" aria-label="Page header">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">Frequently Asked Questions</h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">
                
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

    <div class="page-body">
          <div class="container-xl">
            <div class="card card-lg">
              <div class="card-body">
                <div class="space-y-4">
                  <div>
                    <h2 class="mb-3">1. Introduction</h2>
                    <div id="faq-1" class="accordion accordion-tabs" role="tablist" aria-multiselectable="true">
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-1-1" role="tab">
                            Welcome to our service!
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
                        <div id="faq-1-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-1">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-2" role="tab">
                            Who are we?
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
                        <div id="faq-1-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-3" role="tab">
                            What are our values?
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
                        <div id="faq-1-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h2 class="mb-3">2. Functionality</h2>
                    <div id="faq-2" class="accordion accordion-tabs" role="tablist" aria-multiselectable="true">
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-2-1" role="tab">
                            What are the key features?
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
                        <div id="faq-2-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-2">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-2" role="tab">
                            Does your App support mobile devices?
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
                        <div id="faq-2-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-3" role="tab">
                            Why should I choose your service?
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
                        <div id="faq-2-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-4" role="tab">
                            Is my data secure?
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
                        <div id="faq-2-4" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h2 class="mb-3">3. Payments</h2>
                    <div id="faq-3" class="accordion accordion-tabs" role="tablist" aria-multiselectable="true">
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-3-1" role="tab">
                            Is there any free plan?
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
                        <div id="faq-3-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-3">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-2" role="tab">
                            What are the available payment options?
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
                        <div id="faq-3-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <div class="accordion-header">
                          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-3" role="tab">
                            Can I get a refund?
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
                        <div id="faq-3-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                          <div class="accordion-body pt-0">
                            <div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                                in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                              </p>
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



        <section class="section">
      <div class="container">
        <div class="section-header mb-6">
          <h2 class="section-title">Subscribe on our newsletter</h2>
          <p class="section-description">Get daily news on upcoming offers from many suppliers all over the world</p>
        </div>
      </div>
      <div class="container-tight">
        <div class="row">
          <div class="col">
            <input class="w-100 form-control" placeholder="Your Email" type="email" />
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary">
              <!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
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
                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                <path d="M3 7l9 6l9 -6" />
              </svg>
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </section>


  </FrontendLayout>
</template>

<script setup>
import FrontendLayout from "../../../layouts/FrontendLayout.vue";
const BannerCompany = "/images/banner.webp";
const BranchCompany = "/images/branch.webp";
const profileImage = '/images/avatar.jpg';
</script>

<style scoped>
.banner-img {
  height: 400px; /* bisa disesuaikan */
  object-fit: cover; /* biar gambar nggak gepeng */
}


/* style.css */
.banner-img {
  width: 100%;
  height: 500px;      /* default desktop */
  object-fit: cover;
}

@media (max-width: 768px) {
  .banner-img {
    height: 250px;    /* lebih rendah di tablet/HP */
  }
}

</style>
