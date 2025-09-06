import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '@/pages/Backend/Dashboard/File.vue';
import Users from '../pages/Backend/Users-data/Users.vue';

import Login from '@/pages/Auth/Login.vue';
import Register from '@/pages/Auth/Register.vue';
import { useAuthStore } from "@/store/useLoginStore";
import FromReservasi from '@/pages/Frontend/Form/FromReservasi.vue';
import Homes from '../pages/Frontend/Home/Homes.vue';
import OurServices from '../pages/Frontend/Services/OurServices.vue';
import ListCheckUp from '../pages/Frontend/Checkup/ListCheckUp.vue';
import ProfileCompany from '../pages/Frontend/Profile/ProfileCompany.vue';
import Teams from '../pages/Frontend/Team/Teams.vue';
import Branchs from '../pages/Frontend/Branch/Branchs.vue';
import Facility from '../pages/Frontend/Facility/Facility.vue';
import Information from '../pages/Frontend/Information/Information.vue';
import Contact from '../pages/Frontend/Information/Contact.vue';



const routes = [

  // for dashboard admin
  { path: '/login', component: Login },
  { path: '/register', component: Register },
  { 
    path: '/dashboard', 
    component: Dashboard, 
    meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

  { 
    path: '/users', 
    component: Users, 
    meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },


  // for users
  { 
    path: '/form-reservasi-client', 
    component: FromReservasi, 
    meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

  { 
    path: '/', 
    component: Homes, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

  { 
    path: '/our-services', 
    component: OurServices, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

  { 
    path: '/list-check-up-client', 
    component: ListCheckUp, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

  { 
    path: '/profile', 
    component: ProfileCompany, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

  { 
    path: '/teams', 
    component: Teams, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

  { 
    path: '/cabang-kami', 
    component: Branchs, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

  { 
    path: '/fasiltas-kami', 
    component: Facility, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },
  
  { 
    path: '/information-promo', 
    component: Information, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },

    { 
    path: '/contact', 
    component: Contact, 
    // meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
  },
  
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

// ✅ Navigation Guard
router.beforeEach((to, from, next) => {
  const auth = useAuthStore();

  // kalau route butuh login tapi belum login
  if (to.meta.requiresAuth && !auth.token) {
    next('/login');
  } 
  // kalau sudah login tapi buka /login atau /register
  else if ((to.path === '/login' || to.path === '/register') && auth.token) {
    next('/dashboard'); // redirect ke dashboard
  } 
  else {
    next(); // lanjut
  }
});




export default router;
