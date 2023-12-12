import ApiService from "@/helpers/ApiService";
import RcpApiRoutes from "../../helpers/RcpApiRoutes";
const {createApp} = Vue
createApp({
    data() {
        return {
            loading: false,
            param: {
                email: '',
                password: '',
                remember: false
            }
        }
    },
    methods: {
        login() {
            this.loading = true;
            ApiService.ClearErrorHandler();
            ApiService.POST(RcpApiRoutes.Login, this.param, (res) => {
                this.loading = false;
                if(res.status === 200){
                    location.reload();
                } else {
                    console.log(res);
                    ApiService.ErrorHandler(res.error);
                }
            })
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueInstance');
        vueInstance.style.display = 'block';
    }
}).mount('#vueInstance')
