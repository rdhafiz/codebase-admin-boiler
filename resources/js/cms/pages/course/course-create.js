import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
const {createApp} = Vue
createApp({
    data() {
        return {
            param: {
                course_discount: 0,
                payment_instalment: 0,
            }
        }
    },
    methods: {
        toggleDiscount() {
            const course_discount = document.getElementById('course_discount');
            if(course_discount.checked){
                this.param.course_discount = 1;
            } else {
                this.param.course_discount = 0;
            }
        },
        togglePaymentInstalment() {
            const payment_instalment = document.getElementById('payment_instalment');
            if(payment_instalment.checked){
                this.param.payment_instalment = 1;
            } else {
                this.param.payment_instalment = 0;
            }
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueCourseCreateInstance');
        vueInstance.style.display = 'block';
    }
}).mount('#vueCourseCreateInstance')
