// Import Code Base Theme Script
import Codebase from '../js/codebase/app';
window.Codebase = Codebase;

// Import Axios for HTTP requests
import axios from "axios";

// Import the main App component and Vue
import App from "./App.vue";
import { createApp } from "vue";

// Import Vue Router for navigation
import router from "./router/router";

// Import VueSweetAlert for alert messages
import VueSweetAlert from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

// Create the Vue app instance and mount it to the #app element
createApp(App)
    .use(router, axios, VueSweetAlert)
    .mount('#app');
