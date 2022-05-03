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
            // https://tailwindcss.com/docs/customizing-colors
            colors: {
                sunprimary: "#22C55E",
                "sunprimary-dark": "#15803D",
                "sunprimary-light": "#86EFAC",
                "on-sunprimary": "#1F2937",
                "on-sunprimary-light": "#1F2937",
                "on-sunprimary-dark": "#1F2937",
                //
                nightprimary: "#22C55E",
                "nightprimary-dark": "#86EFAC",
                "nightprimary-light": "#15803D",
                "on-nightprimary": "#1F2937",
                "on-nightprimary-light": "#1F2937",
                "on-nightprimary-dark": "#1F2937",
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
