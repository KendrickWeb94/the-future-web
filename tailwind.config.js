import defaultTheme from "tailwindcss/defaultTheme";
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
            colors: {
                primary: "#A0D831",
                secondary: "#A0CC4B",
                accent: "#101010",
                heading_text: "#171717",
                body_text: "#404040",
                text_normal: "#737373",
                text_light: "#A3A3A3",
            },
            screens: {
                ds: "320px",
                xxs: "350px",
                xs: "480px",
                bs: "540px",
            },
            fontFamily: {
                inter: ['Inter', 'sans-serif'],
            },
            fontWeight: {
                interRegular: 400,
                interMedium: 500,
                interSemiBold: 600,
                interBold: 700,
                interExtraBold: 800,
            },
        },
    },

    plugins: [forms],
};
