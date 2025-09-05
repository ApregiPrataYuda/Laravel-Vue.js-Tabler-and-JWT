<script setup>

import FrontendLayout from '../../../layouts/FrontendLayout.vue';
import { ref } from 'vue'
const Error = '/images/error.png'
</script>




<template>
<FrontendLayout>


     <div class="page-wrapper">
        <!-- BEGIN PAGE HEADER -->
        <div class="page-header d-print-none" aria-label="Page header">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title text-warning">Your List Checkup Log</h2>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-warning">Your List Checkup Log</h3>
              </div>
              <div class="card-body">
                <div class="datagrid">
                  <div class="datagrid-item">
                    <div class="datagrid-title">Registrar</div>
                    <div class="datagrid-content">Third Party</div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Nameservers</div>
                    <div class="datagrid-content">Third Party</div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Port number</div>
                    <div class="datagrid-content">3306</div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Expiration date</div>
                    <div class="datagrid-content">–</div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Creator</div>
                    <div class="datagrid-content">
                      <div class="d-flex align-items-center">
                        <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                        Paweł Kuna
                      </div>
                    </div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Age</div>
                    <div class="datagrid-content">15 days</div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Edge network</div>
                    <div class="datagrid-content">
                      <span class="status status-green"> Active </span>
                    </div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Avatars list</div>
                    <div class="datagrid-content">
                      <div class="avatar-list avatar-list-stacked">
                        <span class="avatar avatar-xs" style="background-image: url(./static/avatars/000m.jpg)"> </span>
                        <span class="avatar avatar-xs" style="background-image: url(./static/avatars/052f.jpg)"> </span>
                        <span class="avatar avatar-xs" style="background-image: url(./static/avatars/002m.jpg)"> </span>
                        <span class="avatar avatar-xs" style="background-image: url(./static/avatars/003m.jpg)"> </span>
                        <span class="avatar avatar-xs" style="background-image: url(./static/avatars/000f.jpg)"> </span>
                        <span class="avatar avatar-xs"> +3 </span>
                      </div>
                    </div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Checkbox</div>
                    <div class="datagrid-content">
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox" checked />
                        <span class="form-check-label">Click me</span>
                      </label>
                    </div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Icon</div>
                    <div class="datagrid-content">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
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
                        class="icon text-green icon-2"
                      >
                        <path d="M5 12l5 5l10 -10" />
                      </svg>
                      Checked
                    </div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Form control</div>
                    <div class="datagrid-content">
                      <input type="text" class="form-control form-control-flush" placeholder="Input placeholder" />
                    </div>
                  </div>
                  <div class="datagrid-item">
                    <div class="datagrid-title">Longer description</div>
                    <div class="datagrid-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>



        <div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-warning">Data Your List Checkup Log</h3>
              </div>
              <div class="card-body">
        <div class="page d-flex flex-column">
     <div class="page-body" style="padding-bottom: 400px;">
  <div class="container-xl">
      <div class="page page-center">
      <div class="container-tight py-4">
        <div class="empty">
          <div class="empty-img">
             <img :src="Error" alt="">
          </div>
          <p class="empty-title">Oops… Kamu Tidak Punya Data Checkup Log</p>
          <p class="empty-subtitle text-secondary">We are sorry but the page you are looking for was not found</p>
          <div class="empty-action">
            <a href="/." class="btn btn-primary btn-4">
              <!-- Download SVG icon from http://tabler.io/icons/icon/arrow-left -->
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
                class="icon icon-2"
              >
                <path d="M5 12l14 0" />
                <path d="M5 12l6 6" />
                <path d="M5 12l6 -6" />
              </svg>
              Take me home
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
   </div>
   </div>



</FrontendLayout>
</template>