/** @type {import('tailwindcss').Config} */
const flowbitePlugin = require("flowbite/plugin");
const formsPlugin = require("@tailwindcss/forms");
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                car: ["Rubik"],
            },
            colors: {
                pr: {
                    100: "#fff5e6",
                    200: "#ffd799",
                    300: "#ffc366",
                    400: "#ff9b00",
                    500: "#e68c00",
                    600: "#e68c00",
                    700: "#cc7c00",
                    800: "#b36d00",
                    900: "#995d00",
                },
                sec: {
                    100: "#fafafa",
                    200: "#ffd799",
                    300: "#f7f7f8",
                    400: "#f5f5f6",
                    500: "#dddddd",
                    600: "#eeeeee",
                    700: "#c4c4c4",
                    800: "#acacac",
                    900: "#acacac",
                },
            },
        },
    },
    plugins: [flowbitePlugin, formsPlugin,],
};

