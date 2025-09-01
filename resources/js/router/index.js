import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '@/pages/Backend/Dashboard/File.vue'
import Login from '@/pages/Auth/Login.vue'
import Register from '@/pages/Auth/Register.vue'
import { useAuthStore } from "@/store/useLoginStore";

const routes = [
  { path: '/login', component: Login },
  { path: '/register', component: Register },
  { 
    path: '/dashboard', 
    component: Dashboard, 
    meta: { requiresAuth: true } // ✅ hanya bisa diakses jika login
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
