/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./assets/**/*.css",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      colors: {
        pantone: "#165889",
      },
    },
  },
  plugins: [],
}