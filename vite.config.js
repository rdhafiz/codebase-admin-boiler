import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/main.scss',
                'resources/js/codebase/app.js',
                'resources/js/cms/auth/login.js',
                'resources/js/cms/auth/header.js'
            ],
            refresh: true,
        })
    ],
});
