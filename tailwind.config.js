import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        "font-barriecito",
        "font-roboto",
        "font-inter",
        "font-open",
        "font-lato",
        "font-source",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                barriecito: ["Barriecito", "cursive"],
                roboto: ["Roboto", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
                open: ["Open Sans", ...defaultTheme.fontFamily.sans],
                lato: ["Lato", ...defaultTheme.fontFamily.sans],
                source: ["Source Sans Pro", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
