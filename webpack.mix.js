let mix = require('laravel-mix');

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

mix.styles([
   'resources/assets/plantilla/css/materialize.min.css',
   'resources/assets/plantilla/css/app.css'
], 'public/css/plantilla.css')
.scripts([
   'resources/assets/plantilla/js/app.js',
   'resources/assets/plantilla/js/init.js',
   'resources/assets/plantilla/js/jquery-2.1.1.min.js',
   'resources/assets/plantilla/js/materialize.min.js'
], 'public/js/plantilla.js')
.js(['resources/assets/js/app.js'],'public/js/app.js');
