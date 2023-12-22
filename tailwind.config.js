import forms from "@tailwindcss/forms";

export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: ["retro", "dark", "cupcake"],
    },
    plugins: [forms, require("daisyui")],
};
