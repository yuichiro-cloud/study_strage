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
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/time_variable.js','public/js')
    .js('resources/js/edit.js','public/js')
    .js('resources/js/get_study.js','public/js')
    .js('resources/js/highlight.pack.js','public/js')
    .js('resources/js/delete.js','public/js')
    .js('resources/js/search.js','public/js')
