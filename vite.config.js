import {defineConfig, optimizeDeps} from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/main.scss',
                'resources/sass/frontend/purplemed.scss',
                'resources/sass/frontend/home.scss',
                'resources/js/frontend/purplemed.js',

                'resources/js/lib/jquery.min.js',
                'resources/js/codebase/app.js',

                'resources/js/cms/auth/login.js',
                'resources/js/cms/helper/header.js',
                'resources/js/cms/pages/page/page.js',
                'resources/js/cms/pages/recruiter/recruiter.js',

                'resources/js/rcp/auth/login.js',
                'resources/js/rcp/helper/header.js',
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        exclude: [],
    },
});
