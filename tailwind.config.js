const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {

    darkMode: 'class',

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                primary: "#22C55E",
                "primary-dark": "#DCFCE7",
                "primary-light": "#22C55E",
                "on-primary": "#FFFFFF",
                "on-primary-light": "#FFFFFF",
                "on-primary-dark": "#000000",
            },
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
                logo: ['"Archivo Black"', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
