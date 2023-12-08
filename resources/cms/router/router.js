import {createRouter, createWebHistory} from "vue-router";

// Importing layout and page components
import Layout from "../pages/layout/layout.vue";
import Login from "../pages/auth/login.vue";
import Dashboard from "../pages/dashboard/dashboard.vue";

// Defining the root URL for the routes
const ROOT_URL = "/secure/administration";

// Setting up routes
const routes = [
    {path: ROOT_URL + '/auth/login', name: 'Login', component: Login},
    {
        path: ROOT_URL, name: 'Layout', component: Layout,
        children: [
            {path: ROOT_URL + '/', redirect: {name: 'Dashboard'}},
            {path: ROOT_URL + '/dashboard', name: 'Dashboard', component: Dashboard}
        ],
    },
];

// Creating router instance
const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
