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
      borderColor: {
        pantone: "#165889",
      },
      backgroundColor: {
        pantone: "#165889",
      },
      keyframes: {
        shakeLoop: {
          '0%': { transform: 'translateX(0)' },
          '5%': { transform: 'translateX(-5px)' },
          '10%': { transform: 'translateX(5px)' },
          '15%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(0)' },
        },
      },
      animation: {
        shakeLoop: 'shakeLoop 4s ease-in-out infinite',
      },
    },
  },
  plugins: [],
}