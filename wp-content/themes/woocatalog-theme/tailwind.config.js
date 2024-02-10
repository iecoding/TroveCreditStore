module.exports = {
  content: [
    "./**/*.php", 
    "./src/**/*.js",
    "./assets/js/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  plugins: [
    require("@tailwindcss/typography"),
    require('@tailwindcss/forms'),
    require('flowbite/plugin')
  ]
}
