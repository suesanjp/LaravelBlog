import forms from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                'autofit': 'repeat(auto-fit, minmax(240px, 1fr))'
            },
        },
    },

    plugins: [forms, require("daisyui")],
    daisyui: {
        themes: ["corporate"],
    },
};
