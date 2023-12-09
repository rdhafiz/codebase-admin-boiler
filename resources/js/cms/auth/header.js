import ApiService from "@/helpers/ApiService";
import AdminApiRoutes from "@/helpers/AdminApiRoutes";
const {createApp} = Vue
createApp({
    data() {
        return {
        }
    },
    methods: {
        logout() {
            this.loading = true;
            ApiService.ClearErrorHandler();
            ApiService.GET(AdminApiRoutes.Logout, (res) => {
                location.reload();
            })
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueHeaderInstance');
        vueInstance.style.display = 'block';
    }
}).mount('#vueHeaderInstance')
