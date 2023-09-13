const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    plugins: [
        
        require('@tailwindcss/forms')
        // Other plugins...
      ],

    theme: {
        extend: {

            fontFamily: {
                poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'dark-blue' : '#001861',
                'light-blue' : '#bfcfff',
                'light-gray' : '#9fabd0'
            },
            screens: {
                '3xl': '1600px',
              },
        },
    },


};
