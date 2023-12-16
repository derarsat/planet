/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#008BC9",
                dark: "#384B53",
                text: "#384B53",
                grey:"#00000029"
            }
        },
        fontFamily: {
            'sans': ['neogroteskpro', 'sans-serif'],
        },
        container: {
            center: true
        }
    },
    plugins: [],
}

