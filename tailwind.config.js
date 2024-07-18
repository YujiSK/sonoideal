/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/views/**/*.blade.php',
      "./resources/js/**/*.js",
      "./resources/js/**/*.vue",
      './resources/css/**/*.css',
      './resources/sass/**/*.scss',
    ],
    theme: {
      extend: {},
    },
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
    ]
  }