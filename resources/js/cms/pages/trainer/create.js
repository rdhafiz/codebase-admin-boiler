import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'
const {createApp} = Vue
createApp({
    data() {
        return {}
    },
    methods: {
        selectImage(e) {
            var input = e.target;
            var image = document.getElementById('preview-image');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(file) {
                    image.src = file.target.result;
                    image.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    },
    mounted() {
        const vueInstance = document.getElementById('vueTrainerFormInstance');
        vueInstance.style.display = 'block';
        window.Codebase.helpersOnLoad(['js-ckeditor'], {
            toolbar : 'Basic',
            uiColor : '#9AB8F3'
        });
    }
}).mount('#vueTrainerFormInstance')
