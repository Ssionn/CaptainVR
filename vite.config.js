import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
<<<<<<< HEAD
            // valetTls: 'captainvr.test',
        }),
=======
            valetTls: 'captainvr.test',
}),
>>>>>>> 09d786e (Vite fixed)
    ],
});
