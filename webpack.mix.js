const mix = require('laravel-mix');

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
    .js('resources/js/buttons.js', 'public/js')
    .js('resources/js/perfect-scrollbar.min.js', 'public/js')
    .js('resources/js/popper.min.js', 'public/js')
    .js('resources/js/smooth-scrollbar.min.js', 'public/js')



    .sass('resources/scss/style.scss', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/argon-dashboard.css_v=2.0.0.css', 'public/css')
    .css('node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css', 'public/css')

    



    

    .sourceMaps();

    