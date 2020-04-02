const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
const mypostcss = require('laravel-mix-postcss-config')


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/06-extracting-reusable-components/main.js', 'public/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/06-extracting-reusable-components/js')
    .js('resources/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/07-customizing-your-design-system/main.js', '/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/07-customizing-your-design-system//js')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/css/tailwind.css', 'public/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/css/')
    .postCss('resources/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/07-customizing-your-design-system/assets/tailwind.css', 'public/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/css/')
    .postCssConfig()
    .browserSync('127.0.0.1:8000');
