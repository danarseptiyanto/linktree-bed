/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,php}"],
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
