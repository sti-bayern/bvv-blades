import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        minify: false,
        outDir: './dist',
        manifest: false,
        emptyOutDir: true, // also necessary
        rollupOptions: {
            output: {
                entryFileNames: 'assets/js/[name].js',
                assetFileNames: 'assets/css/[name].[ext]'
            }
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/assets/js/app.js',
                'resources/assets/css/app.css',
            ],
            refresh: true,
        })
    ]
});
