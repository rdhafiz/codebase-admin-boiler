import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
const {createApp} = Vue
createApp({
    data() {
        return {}
    },
    methods: {
        deleteLearner(id) {
            Swal.fire({
                title: "Delete Learner",
                html: "<strong>Are you sure?</strong> <br> <span class='text-danger'>You won't be able to revert this!</span>",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#777",
                confirmButtonText: "Yes, Delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('delete_'+id);
                    form.submit();
                }
            });
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueLearnerListInstance');
        vueInstance.style.display = 'block';
    }
}).mount('#vueLearnerListInstance')
