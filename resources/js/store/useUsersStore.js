import { ref, reactive } from "vue";
import { defineStore } from "pinia";
import axios from "axios";
import Swal from "sweetalert2"; 


export const useStoreUsers = defineStore('Data-Users', () => {
        const baseUrlApi = "/api/users"
        const usersData = ref([]);
        const loadingUsers = ref(false)  
        const searchUsers = ref("");
        let searchTimeoutUsers = null;       
   
        const pagination = reactive({
            current_page: 1,
            per_page: 10,
            prev_page_url: null,
            next_page_url: null,
            last_page: 1,
            total: 0,
        });

        const sort = reactive({
            column: "created_at",
            direction: "desc",
        });

        const allowedSortColumns = ["fullname", "created_at"];

        const getAuthHeader = () => {
            const token = localStorage.getItem("token");
            return { Authorization: `Bearer ${token}` };
        };


            const fetchUsers = async (url = "/api/users") => {
                loadingUsers.value = true;
                try {
                const response = await axios.get(url, {
                    headers: getAuthHeader(),
                });

                const result = response.data;
                const dataArray = Array.isArray(result.data)
                    ? result.data
                    : result.data?.data ?? [];

                usersData.value.splice(0, usersData.value.length, ...dataArray);

                const pag = result.pagination ?? result.data?.pagination
                                if (pag) {
                                    pagination.current_page = pag.current_page
                                    pagination.per_page = pag.per_page
                                    pagination.prev_page_url = pag.prev_page_url
                                    pagination.next_page_url = pag.next_page_url
                                    pagination.last_page = pag.last_page
                                    pagination.total = pag.total
                                }

                } catch (error) {
                console.error("Gagal fetch:", error);
                } finally {
                loadingUsers.value = false;
                }
            };


            const buildUrl = () => {
                    const params = new URLSearchParams()
                            //ini code searching
                            if (searchUsers.value) {
                            params.append('search', searchUsers.value)
                            }

                            if (pagination.current_page) {
                                params.append('page', pagination.current_page)
                              }

                            if (pagination.per_page) {
                                    params.append('per_page', pagination.per_page)
                                }


                                 if (sort.column) {
                                    params.append('sort_by', sort.column)
                                    params.append('sort_dir', sort.direction)
                                }


                             return `${baseUrlApi}?${params.toString()}`
                        }


                         const searchWithDelay = (val) => {
                            clearTimeout(searchTimeoutUsers)
                            searchUsers.value = val

                            // Reset ke halaman 1 saat pencarian
                            pagination.current_page = 1

                            searchTimeoutUsers = setTimeout(() => {
                                fetchUsers(buildUrl())
                            }, 500)
                            }


                             const changePageSize = () => {
                            pagination.current_page = 1
                            fetchUsers(buildUrl())
                            }


                             const changeSorting = () => {
                                    pagination.current_page = 1
                                    fetchUsers(buildUrl())
                                }


                                  const toggleSort = (col) => {
                                    if (!allowedSortColumns.includes(col)) return  

                                    if (sort.column === col) {
                                    sort.direction = sort.direction === 'asc' ? 'desc' : 'asc'
                                    } else {
                                    sort.column = col
                                    sort.direction = 'asc'
                                    }
                                    changeSorting()
                                }


                                const resetFilters = () => {
                                searchUsers.value = '' // ← ini yang ga ngefek ke v-model
                                pagination.per_page = 10
                                pagination.current_page = 1
                                sort.column = 'created_at'
                                sort.direction = 'desc'
                                fetchUsers(buildUrl())
                            }
                            

                             const formatDate = (dateStr) => {
                                    if (!dateStr) return '-'
                                            const date = new Date(dateStr)
                                        if (isNaN(date.getTime())) {
                                            return 'Belum Di Pernah update'
                                        }
                                        const options = {
                                            year: 'numeric',
                                            month: 'long',
                                            day: '2-digit'
                                        }
                            return date.toLocaleDateString('id-ID', options)
                            }

                             const userDetail = ref(null)
                              const loading = ref(false) 
                            const detailUsers = async (usersId) => {
                                loading.value = true
                                try {
                                    const res = await axios.get(`/api/users-detail/${usersId}`, {
                                    headers: getAuthHeader(),
                                    })
                                    userDetail.value = res.data.data
                                } catch (err) {
                                    console.error("Gagal ambil detail user:", err)
                                    alert("Gagal mengambil detail user.")
                                } finally {
                                    loading.value = false
                                }
                                }


           

            return{
                baseUrlApi,
                usersData,
                loadingUsers,
                searchUsers,
                searchTimeoutUsers,
                pagination,
                sort,
                fetchUsers,
                searchWithDelay,
                changePageSize,
                toggleSort,
                changeSorting,
                resetFilters,
                buildUrl,
                formatDate,
                userDetail,
                loading,
                detailUsers
            }




})