import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
import moment from "moment";

const {createApp} = Vue
createApp({
    data() {
        return {
            param: {
                course_discount: 0,
                courseSchedules: [],
                payment_instalment: 0,
                total_installment: 0,
                payment_instalment_details: [],
            }
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
            const course_fee = parseFloat(document.getElementById('courseForm').elements['course_fee'].value) || 0;
            const payment_duration = parseFloat(document.getElementById('courseForm').elements['payment_duration'].value) || 0;
            const total_installment = parseFloat(document.getElementById('courseForm').elements['total_installment'].value) || 0;
            if (course_fee > 0 && payment_duration > 0 && total_installment > 0) {
                this.param.total_installment = total_installment;
                const divideDays = payment_duration / total_installment;

                let i = 0;
                while (i < total_installment) {
                    const sl = i + 1;
                    let days = Math.floor(divideDays);
                    let amount = Math.floor(course_fee / this.param.total_installment);
                    if (sl === total_installment) {
                        days = Math.ceil(divideDays);
                        amount = Math.ceil(course_fee / this.param.total_installment);
                    }
                    this.param.payment_instalment_details.push({
                        sl: sl,
                        days: days,
                        amount: amount
                    });

                    i++;
                }

                console.log(this.param.payment_instalment_details);
            }
        },
        deleteOneInstallment() {
            let total_installment = parseFloat(document.getElementById('courseForm').elements['total_installment'].value) || 0;
            total_installment = total_installment - 1;
            document.getElementById('courseForm').elements['total_installment'].value = total_installment;
            this.calculateInstallment();
        },
        calculateSchedule(){
            this.param.courseSchedules.length = 0;
            const course_duration = parseFloat(document.getElementById('courseForm').elements['course_duration'].value) || 0;
            const course_start_date = document.getElementById('courseForm').elements['course_start_date'].value;
            const course_end_date = document.getElementById('courseForm').elements['course_end_date'].value;
            if(course_duration > 0 && course_start_date.trim() !== '' && course_end_date.trim() !== ''){
                this.param.courseSchedules = this.divideSchedule(course_start_date, course_end_date, course_duration);
                console.log(this.param.courseSchedules);
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
                    start: moment(d1).format('LL'),
                    end: d2 <= end ? moment(new Date(d2.setDate(d2.getDate() - 1))).format('LL') : moment(end).format('LL')
                });
            } while (current <= end);

            return result;
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueCourseCreateInstance');
        vueInstance.style.display = 'block';
        window.Codebase.helpersOnLoad(['js-flatpickr']);
    }
}).mount('#vueCourseCreateInstance')
