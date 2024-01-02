const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles(['resources/dist/admin/css/dropzone.min.css'],'public/admin/assets/css/dropzone.css')
    .scripts(['resources/dist/admin/js/dropzone.min.js'],'public/admin/assets/js/dropzone.js')
