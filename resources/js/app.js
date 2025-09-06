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

// ✅ Import Vue3-Leaflet sekali saja
//library yang ini ya jagan yang lain npm install @vue-leaflet/vue-leaflet leaflet
import L from "leaflet"
import "leaflet/dist/leaflet.css"

delete L.Icon.Default.prototype._getIconUrl;
L.Icon.Default.mergeOptions({
  iconRetinaUrl: "https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon-2x.png",
  iconUrl: "https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png",
  shadowUrl: "https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png",
});


const app = createApp(App)

const pinia = createPinia()   
app.use(pinia)                
app.use(router)


app.mount('#app')
