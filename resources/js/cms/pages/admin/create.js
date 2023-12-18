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
        const vueInstance = document.getElementById('vueAdminFormInstance');
        vueInstance.style.display = 'block';
    }
}).mount('#vueAdminFormInstance')
