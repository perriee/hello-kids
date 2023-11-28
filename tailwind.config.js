/** @type {import('tailwindcss').Config} */
export default {
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './node_modules/flowbite/**/*.js'],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins'],
      },
      colors: {
        primary: {
            DEFAULT: '#5671A5',
            hover: '#4C6699'
        }
      },
    },
  },
  plugins: [require('flowbite/plugin')],
};
