import ApiService from "@/helpers/ApiService";
import RcpApiRoutes from "../../helpers/RcpApiRoutes";
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
            ApiService.GET(RcpApiRoutes.Logout, (res) => {
                location.reload();
            })
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueHeaderInstance');
        vueInstance.style.display = 'block';
    }
}).mount('#vueHeaderInstance')
