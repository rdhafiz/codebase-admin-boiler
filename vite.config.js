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
                'resources/js/frontend/pages/osce-apply.js',
                'resources/js/frontend/pages/jobs.js',

                'resources/js/lib/jquery.min.js',
                'resources/js/codebase/app.js',

                'resources/js/cms/auth/login.js',
                'resources/js/cms/helper/header.js',

                'resources/js/cms/pages/config/config.js',
                'resources/js/cms/pages/profile/update.js',
                'resources/js/cms/pages/page/page.js',
                'resources/js/cms/pages/admin/admin.js',
                'resources/js/cms/pages/admin/create.js',
                'resources/js/cms/pages/learner/learner.js',
                'resources/js/cms/pages/learner/create.js',
                'resources/js/cms/pages/trainer/trainer.js',
                'resources/js/cms/pages/trainer/create.js',
                'resources/js/cms/pages/course/course.js',
                'resources/js/cms/pages/course/course-create.js',
                'resources/js/cms/pages/course/category.js',
                'resources/js/cms/pages/course/type.js',
                'resources/js/cms/pages/course/price.js',
                'resources/js/cms/pages/course/payment.js',
                'resources/js/cms/pages/course/discount.js',
                'resources/js/cms/pages/recruiter/recruiter.js',

                'resources/js/rcp/auth/login.js',
                'resources/js/rcp/helper/header.js',
                'resources/js/rcp/pages/job/job.js',
                'resources/js/rcp/pages/job/job.js',

                'resources/sass/frontend/theme/theme.scss'
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        exclude: [],
    },
});
