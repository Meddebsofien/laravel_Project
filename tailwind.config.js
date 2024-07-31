/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    './app/Filament/**/*.php',
    './resources/views/filament/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        customColorgreen: '#004F5C',
        buttonnav : '#809bb5',
        backSingin: '#004F5C',
        white2 : '#F2F1F1',
        linklost:'#00E8FF',
        bleuee : '#2CB8C5',
        redd: '#FF0000',
        blu: '#00E9FF'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

