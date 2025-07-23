import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue2';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/admin.js',
                'resources/css/app.css',
            ],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            '@': resolve(__dirname, 'resources/js'),
            'vue$': 'vue/dist/vue.esm.js',
        },
    },
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['vue', 'vue-router', 'vuex'],
                },
            },
        },
    },
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@import "sass/variables.scss";`
            }
        }
    }
});
