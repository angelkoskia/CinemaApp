import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css_login/app.css_login', 'resources/js_login/app.js_login'],
            refresh: true,
        }),
    ],
});
