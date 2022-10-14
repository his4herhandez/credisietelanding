/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./view/*/*.php",
    "./view/*.php",
    "./src/*/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'negro': '#252422',
        'azul': '#47C5FF',
        'blanco': '#f1faee',
        'rojo': '#e63946'
      }
    },
  },
  plugins: [],
}
