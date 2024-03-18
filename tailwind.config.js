/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: ["*.{html,php}", "admin/**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        inter: ["Inter"],
        syne: ["Syne"],
      },
    },
  },
  plugins: [require("@tailwindcss/line-clamp")],
};
