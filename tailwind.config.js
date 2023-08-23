/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php",],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#f2fbf9",
                    100: "#d3f4ed",
                    200: "#a7e8dc",
                    300: "#74d4c6",
                    400: "#47baad",
                    500: "#33b3a6",
                    600: "#227f78",
                    700: "#1f6662",
                    800: "#1d524f",
                    900: "#1c4542",
                    950: "#0b2828",
                },
            },
        },
    },
    plugins: [],
}

