import ApiService from "@/helpers/ApiService";
import WebApiRoutes from "@/helpers/WebApiRoutes";

const {createApp} = Vue
createApp({
    data() {
        return {
            param: {
                title: '',
                location: '',
                job_type: []
            },
            jobs: [],
            loading: true,
            keyTypeInterval: null
        }
    },
    methods: {
        keyTypeSlow: function () {
            clearInterval(this.keyTypeInterval);
            this.keyTypeInterval = setTimeout(() => {
                clearInterval(this.keyTypeInterval);
                this.searchJobs();
            }, 1000);
        },
        searchJobs: function () {
            this.loading = true;
            ApiService.POST(WebApiRoutes.JobSearch, this.param, (res) => {
                this.loading = false;
                this.jobs = res;
            })
        },
        toggleJobType: function (job_type) {
            const index = this.param.job_type.indexOf(job_type);
            if (index > -1) {
                this.param.job_type.splice(index, 1)
            } else {
                this.param.job_type.push(job_type);
            }
            this.searchJobs();
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueJobBrowseInstance');
        vueInstance.style.display = 'block';
        this.searchJobs();
    }
}).mount('#vueJobBrowseInstance')
