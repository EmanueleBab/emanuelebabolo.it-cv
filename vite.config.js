import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                'resources/js/app.js',
                'resources/scss/index.scss',
                'resources/scss/variables.scss',
                'resources/scss/mixins.scss',
            ],
            refresh: true,
        }),
    ],
});
