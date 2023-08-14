/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                primary: { DEFAULT: "#830D98" },
                secondary: { DEFAULT: "#F3C3E7" },
            },
            fontFamily: {
                dm: ["'DM Sans'", 'sans-serif'],
                baloo: ["'Baloo 2'", 'sans-serif'],
            },
        },
    },
    plugins: [],
};
