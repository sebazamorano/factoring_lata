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
    .js('resources/js/argon.js', 'public/js')
    .js('resources/js/argon-dashboard.js', 'public/js')
    .sass('resources/sass/argon-dashboard.scss', 'public/css')
    .sass('resources/sass/font-awesome.scss', 'public/css');
