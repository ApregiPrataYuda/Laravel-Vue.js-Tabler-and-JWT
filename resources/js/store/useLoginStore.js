// stores/auth.js
import { defineStore } from "pinia";
import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

export const useAuthStore = defineStore("auth", () => {
  const router = useRouter();

  // state
  const user = ref(null);
  const token = ref(localStorage.getItem("token") || null);
  const error = ref("");
  const validationErrors = ref({});

  // actions
  const login = async (email, password, remember = false) => {
    error.value = "";
    validationErrors.value = {};

    // ✅ validasi frontend
    if (!email) {
      validationErrors.value.email = ["Email wajib diisi"];
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      validationErrors.value.email = ["Format email tidak valid"];
    }

    if (!password) {
      validationErrors.value.password = ["Password wajib diisi"];
    } else if (password.length < 6) {
      validationErrors.value.password = ["Password minimal 6 karakter"];
    }

    // kalau ada error validasi, stop di sini
    if (Object.keys(validationErrors.value).length > 0) {
      return;
    }

    try {
      const response = await axios.post("/api/login", { email, password });
      const data = response.data;

      if (data.access_token && data.user) {
        token.value = data.access_token;
        user.value = data.user;

        // simpan ke localStorage
        localStorage.setItem("token", data.access_token);
        localStorage.setItem("user", JSON.stringify(data.user));
        remember
          ? localStorage.setItem("remember", "true")
          : localStorage.removeItem("remember");

        // redirect by role
        switch (data.user.role) {
          case 1:
            router.push("/dashboard");
            break;
          case 2:
            router.push("/dashboard");
            break;
          default:
            error.value = "Role Anda tidak terdaftar di sistem kami";
        }
      } else {
        error.value = data.message || "Login gagal";
      }
    } catch (err) {
      if (err.response) {
        if (err.response.status === 422) {
          validationErrors.value = err.response.data.errors || {};
        } else if (err.response.status === 401) {
          error.value = err.response.data.message || "Email atau password salah";
        } else {
          error.value = err.response.data?.message || "Login gagal";
        }
      } else {
        error.value = "Tidak dapat terhubung ke server.";
      }
    }
  };

  const logout = async () => {
    try {
      await axios.post(
        "/api/logout",
        {},
        { headers: { Authorization: `Bearer ${token.value}` } }
      );
    } catch (err) {
      console.error("Logout error:", err.response?.data || err.message);
    }

    token.value = null;
    user.value = null;
    localStorage.removeItem("token");
    localStorage.removeItem("user");
    localStorage.removeItem("remember");

    router.push("/login");
  };

  // pas awal refresh, coba ambil user dari localStorage
  if (localStorage.getItem("user")) {
    user.value = JSON.parse(localStorage.getItem("user"));
  }

  return {
    user,
    token,
    error,
    validationErrors,
    login,
    logout,
  };
});
