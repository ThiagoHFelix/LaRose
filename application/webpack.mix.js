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
   .sass('resources/sass/app.scss', 'public/css');

mix.js('node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.js', 'public/js')
   .sass('node_modules/startbootstrap-sb-admin-2/scss/sb-admin-2.scss', 'public/css')
   .styles('node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.css', 'public/css/fontawesome.css');   

mix.js('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js')
   .styles('node_modules/bootstrap//bootstrap.css', 'public/css');   

   mix.js('node_modules/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.js', 'public/js/jquery_easing.js');   
   mix.js('node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.js', 'public/js/jquery.js');   