/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily:{
            'ari' : ['Arima'],
        },
        container: {
            center : true,
        },
        extend: {},
    },
    plugins: [],
}
