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

mix.styles([
    'resources/views/assets/styles/bootstrap-grid.css',
    'resources/views/assets/styles/toastify.css',
    'resources/views/assets/styles/main.css'
], 'public/assets/styles/app.css')
    .scripts([
        'resources/views/assets/scripts/jquery-3.5.1.js',
        'resources/views/assets/scripts/toastify.js',
        'resources/views/assets/scripts/main.js'
    ], 'public/assets/scripts/app.js')

    .version();
