import Swal from 'sweetalert2/dist/sweetalert2.js'
import moment from "moment";
import 'sweetalert2/src/sweetalert2.scss'

const {createApp} = Vue
createApp({
    data() {
        return {
            param: {
                start_date: null,
                days: null
            }
        }
    },
    methods: {
        submitForm() {
            const form = document.getElementById('ScheduleForm');
            form.submit();
        },
        calculateEndDate() {
            const start_date = document.getElementById("ScheduleForm").elements["start_date"];
            const end_date = document.getElementById("ScheduleForm").elements["end_date"];
            const duration = document.getElementById("ScheduleForm").elements["duration"];
            end_date.value = moment(start_date.value).add(duration.value, 'days').format('LL');
        },
        calculateFaceToFace() {
            const duration = document.getElementById("ScheduleForm").elements["duration"];
            const blended = document.getElementById("ScheduleForm").elements["blended"];
            const face_to_face = document.getElementById("ScheduleForm").elements["face_to_face"];
            face_to_face.value = duration.value - blended.value;
        },
        calculateBlended() {
            const duration = document.getElementById("ScheduleForm").elements["duration"];
            const blended = document.getElementById("ScheduleForm").elements["blended"];
            const face_to_face = document.getElementById("ScheduleForm").elements["face_to_face"];
            blended.value = duration.value - face_to_face.value;
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueScheduleEditInstance');
        vueInstance.style.display = 'block';
        window.Codebase.helpersOnLoad(['js-flatpickr']);
        this.calculateEndDate();
    }
}).mount('#vueScheduleEditInstance')
