/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      backgroundImage: {
       },
      fontFamily: {
       inter: ["Inter","sans-serif"],
       scoville: ["Scoville", "sans-serif"],
      },
    },
    screens: {
      'xs': '475px',
      'xxs': '320px',
      ...defaultTheme.screens,
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

