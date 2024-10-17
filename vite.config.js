import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwind from 'tailwindcss'; // --> Importacion de tailwindcss
import autoprefixer from 'autoprefixer'; // --> Importacion de autoprefixer para el postcss

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    css : { 
        postcss : {
            plugins : [
                tailwind(),
                autoprefixer(),
            ],
        },
    },
});