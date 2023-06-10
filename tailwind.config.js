import forms from "@tailwindcss/forms";

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
                jp: [
                    "Hiragino Sans",
                    "ヒラギノ角ゴシック",
                    "メイリオ",
                    "Meiryo",
                    "MS Ｐゴシック",
                    "MS PGothic",
                    "sans-serif",
                    "YuGothic",
                    "Yu Gothic",
                ],
            },
            gridTemplateColumns: {
                autofit: "repeat(auto-fit, minmax(240px, 1fr))",
            },
            backgroundImage: {
                shore: "url('/images/shore.jpg')",
            },
        },
    },

    plugins: [forms, require("daisyui")],
    daisyui: {
        themes: ["corporate"],
    },
};
