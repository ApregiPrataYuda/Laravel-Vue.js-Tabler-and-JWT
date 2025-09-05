// stores/useRegisterStore.js
import { defineStore } from "pinia"
import { ref } from "vue"
import { useRouter } from "vue-router"
import axios from "axios"
import Swal from "sweetalert2"

export const useRegisterStore = defineStore("register", () => {
  const router = useRouter()

  // state
  const fullname = ref("")
  const username = ref("")
  const email = ref("")
  const phone_number = ref("")
  const password = ref("")
   const agreeTerms = ref(false)

  // validasi frontend
  const validate = () => {
    let errors = []

    // Fullname
    if (!fullname.value) {
      errors.push("Nama lengkap wajib diisi.")
    } else if (!/^[a-zA-Z\s]+$/.test(fullname.value)) {
      errors.push("Nama lengkap hanya boleh huruf dan spasi.")
    } else if (fullname.value.trim().length < 3) {
      errors.push("Nama lengkap harus lebih dari 3 karakter.")
    }

    // Username
    if (!username.value) {
      errors.push("Username wajib diisi.")
    } else if (!/^[a-zA-Z0-9]+$/.test(username.value)) {
      errors.push("Username hanya boleh huruf dan angka (tanpa spasi/simbol).")
    } else if (username.value.length < 6) {
      errors.push("Username harus lebih dari 6 karakter.")
    }

    // Email
    if (!email.value) {
      errors.push("Email wajib diisi.")
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
      errors.push("Format email tidak valid.")
    }

    // Password
    if (!password.value) {
      errors.push("Password wajib diisi.")
    } else if (password.value.length < 8 || password.value.length > 16) {
      errors.push("Password harus 8–16 karakter.")
    }

    // Phone
    if (!phone_number.value) {
      errors.push("Nomor telepon wajib diisi.")
    } else if (!/^[0-9]+$/.test(phone_number.value)) {
      errors.push("Nomor telepon hanya boleh angka.")
    }

     if (!agreeTerms.value) {
      errors.push("Anda harus menyetujui syarat dan kebijakan terlebih dahulu.")
    }

    return errors
  }

  // action register
  const register = async () => {
    const errors = validate()
    if (errors.length > 0) {
      Swal.fire({
        icon: "error",
        title: "Validasi Gagal!",
        html: errors.join("<br>")
      })
      return
    }

    try {
      const res = await axios.post("/api/register", {
        fullname: fullname.value,
        username: username.value,
        email: email.value,
        phone_number: phone_number.value,
        password: password.value
      })

      Swal.fire({
        icon: "success",
        title: "Registrasi Berhasil!",
        text: res.data.message,
        showConfirmButton: false,
        timer: 3000
      })

      setTimeout(() => {
        router.push("/login")
      }, 3000)
    } catch (err) {
      if (err.response && err.response.data) {
        const data = err.response.data
        if (data.errors) {
          const errorMessages = Object.values(data.errors).flat().join("<br>")
          Swal.fire({
            icon: "error",
            title: data.message || "Registrasi gagal!",
            html: errorMessages
          })
        } else {
          Swal.fire({
            icon: "error",
            title: "Registrasi gagal!",
            text: data.message || "Terjadi kesalahan!"
          })
        }
      } else {
        Swal.fire({
          icon: "error",
          title: "Server Error!",
          text: "Terjadi kesalahan server!"
        })
      }
    }
  }

  return {
    fullname,
    username,
    email,
    phone_number,
    agreeTerms,
    password,
    register
  }
})
