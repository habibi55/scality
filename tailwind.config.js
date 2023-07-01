/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                text: "#2D5587",
                based: "#AFBED1",
                primary: "#2B87FE",
                primary_hover: "#0067ED",
                primary_back: "#EFF4FE",
                second: "#F8A100",
                second_back: "#FDEDCE",
                second_tersier: "#D7ED63",
            },
        },
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
            ubuntu: ["Ubuntu", "sans-serif"],
        },
    },
    plugins: [],
};
