/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
       },
      fontFamily: {
       inter: ["Inter","sans-serif"]
      },
    },
    screens: {
      'xs': '475px',
      'xxs': '320px',
      ...defaultTheme.screens,
    },
  },
  plugins: [],
}

