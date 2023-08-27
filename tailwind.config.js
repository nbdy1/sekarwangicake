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
            boxShadow: {
                'brutal': '8px 8px 0px 0px ','brutalh': '4px 4px 0px 0px ','brutal-xl': '6px 8px 0px 2px ','brutal-xlh': '10px 12px 0px 2px '
              }
        },
    },
    plugins: [],
};
