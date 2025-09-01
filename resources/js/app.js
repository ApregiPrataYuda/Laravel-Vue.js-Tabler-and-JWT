import './bootstrap';
import '../css/app.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'
// import App from './App.vue/index.js'
import App from './App.vue'
import router from './router'
// Import Tabler JS from the new location in 'resources/vendor'
import '../vendor/dist/js/tabler.min.js';
import '../vendor/dist/js/demo.min.js';
import '../vendor/dist/libs/apexcharts/dist/apexcharts.min.js';
import '../vendor/dist/libs/jsvectormap/dist/jsvectormap.min.js';
import '../vendor/dist/libs/jsvectormap/dist/maps/world.js';
import '../vendor/dist/libs/jsvectormap/dist/maps/world-merc.js';

import '@fortawesome/fontawesome-free/css/all.min.css'

const app = createApp(App)

const pinia = createPinia()   
app.use(pinia)                

app.use(router)
app.mount('#app')
