import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
//import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/pages/home.css', //tambahan
                'resources/css/pages/login.css', //tambahan
                'resources/css/pages/register.css', //tambahan
                'resources/css/pages/auth.css', //tambahan
                'resources/css/pages/artikel/create.css', //tambahan
                'resources/css/pages/artikel/index.css',
                'resources/css/pages/artikel/show.css',
                'resources/css/pages/home2.css', //tambahan
                'resources/js/app.js'],
            refresh: true,
        }),
        //tailwindcss(),
    ],
});
