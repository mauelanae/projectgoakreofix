module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors:{
        utama: '#ED2B2A',
      }
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}