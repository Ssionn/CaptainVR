/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            zoom: {
                '25': '0.25',
                '50': '0.5',
                '75': '0.75',
                '100': '1',
            }
        },
    },
    plugins: [],
}
