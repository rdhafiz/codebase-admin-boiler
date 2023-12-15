import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
import moment from "moment";
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';

const {createApp} = Vue
createApp({
    components: {flatPickr},
    data() {
        return {
            param: {
                course_title: null,
                course_workstations: 10,
                course_overview: '',
                course_lead_trainer: null,
                course_category: '',
                course_type: '',
                course_fee: null,
                course_duration: null,
                course_start_date: null,
                course_end_date: null,
                courseSchedules: [],
                payment_instalment: 0,
                payment_instalment_duration: 0,
                payment_total_instalment: 0,
                payment_instalment_details: [],
                course_discount: 0,
                course_discount_start_date: null,
                course_discount_end_date: null,
                course_discount_amount: 0,
                course_discount_promo_code: null
            },
            dateConfig: {
                altFormat: 'F j, Y',
                altInput: true,
                dateFormat: 'Y-m-d',
            },
            autoCalculate: 0,
            installmentTotalPrice: 0,
            installmentTotalPriceExceed: 0,
        }
    },
    methods: {
        toggleDiscount() {
            const course_discount = document.getElementById('course_discount');
            if (course_discount.checked) {
                this.param.course_discount = 1;
                setTimeout(() => {
                    window.Codebase.helpersOnLoad(['js-flatpickr']);
                }, 1000)
            } else {
                this.param.course_discount = 0;
            }
        },
        togglePaymentInstalment() {
            const payment_instalment = document.getElementById('payment_instalment');
            if (payment_instalment.checked) {
                this.param.payment_instalment = 1;
            } else {
                this.param.payment_instalment = 0;
            }
        },
        calculateInstallment() {
            this.param.payment_instalment_details.length = 0;
            let Fee = this.param.course_fee;
            if(this.param.course_discount_amount > 0){
                Fee = this.param.course_fee - this.param.course_discount_amount;
            }
            if (Fee > 0 && this.param.payment_instalment_duration > 0 && this.param.payment_total_instalment > 0) {
                const divideDays = this.param.payment_instalment_duration / this.param.payment_total_instalment;
                let i = 0;
                while (i < this.param.payment_total_instalment) {
                    const sl = i + 1;
                    let days = Math.floor(divideDays);
                    let amount = Math.floor(Fee / this.param.payment_total_instalment);
                    if (sl === this.param.payment_total_instalment) {
                        days = Math.ceil(divideDays);
                        amount = Math.ceil(Fee / this.param.payment_total_instalment);
                    }
                    this.param.payment_instalment_details.push({
                        days: days,
                        amount: amount
                    });
                    i++;
                }
                this.calculateInstallmentTotalPrice();
            }
        },
        calculateInstallmentTotalPrice(){
            this.installmentTotalPrice = 0;
            this.installmentTotalPriceExceed = 0;
            this.param.payment_instalment_details.forEach((v) => {
                this.installmentTotalPrice = parseFloat(this.installmentTotalPrice) + parseFloat(v.amount);
            })
            if(this.installmentTotalPrice > (this.param.course_fee - this.param.course_discount_amount)){
                this.installmentTotalPriceExceed = 1;
            }
        },
        deleteThisInstallment(index) {
            this.param.payment_instalment_details.splice(index, 1);
            this.calculateInstallment();
        },
        calculateSchedule(){
            if(this.autoCalculate === 1){
                this.param.courseSchedules.length = 0;
                const course_duration = parseFloat(document.getElementById('courseForm').elements['course_duration'].value) || 0;
                const course_start_date = document.getElementById('courseForm').elements['course_start_date'].value;
                const course_end_date = document.getElementById('courseForm').elements['course_end_date'].value;
                if(course_duration > 0 && course_start_date.trim() !== '' && course_end_date.trim() !== ''){
                    this.param.courseSchedules = this.divideSchedule(course_start_date, course_end_date, course_duration);
                }
            }
        },
        divideSchedule(start, end, days) {
            const result = [];
            start = new Date(start);
            end = new Date(end);
            const current = new Date(start.getTime());
            do {
                const d1 = new Date(current.getTime());
                const d2 = new Date(current.setDate(current.getDate() + days));

                result.push({
                    start: moment(d1).format('YYYY-MM-DD'),
                    end: d2 <= end ? moment(new Date(d2.setDate(d2.getDate() - 1))).format('YYYY-MM-DD') : moment(end).format('YYYY-MM-DD')
                });
            } while (current <= end);

            return result;
        },
        deleteThisSchedule(index){
            this.param.courseSchedules.splice(index, 1);
        },
        addNewSchedule(){
            this.param.courseSchedules.push({
                start: null,
                end: null
            });
        },
        submitForm() {
            const form = document.getElementById('courseForm');
            form.submit();
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueCourseCreateInstance');
        vueInstance.style.display = 'block';
        window.Codebase.helpersOnLoad(['js-flatpickr']);
        window.Codebase.helpersOnLoad(['js-ckeditor'], {
            toolbar : 'Basic',
            uiColor : '#9AB8F3'
        });
        if(window.course_details !== undefined){
            this.param = window.course_details;
            console.log(this.param.course_discount)
        }
        setTimeout(() => {
            this.autoCalculate = 1;
        }, 2000)
    }
}).mount('#vueCourseCreateInstance')
