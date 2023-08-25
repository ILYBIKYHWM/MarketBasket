/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'putty': {
        '50': '#f5f8f6',
        '100': '#ddeae2',
        '200': '#bbd4c5',
        '300': '#7eaa92',
        '400': '#6a9780',
        '500': '#507c66',
        '600': '#3e6351',
        '700': '#355044',
        '800': '#2d4238',
        '900': '#293831',
        '950': '#141f1b',
      },    
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

