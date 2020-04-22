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

mix
    .styles([
        'resources/views/front/css/normalize.css',
        'resources/views/front/css/webflow.css',
        'resources/views/front/css/duduk.webflow.css',
    ], 'public/front/assets/css/vendor.css')

    .scripts([
        'resources/views/front/js/webflow.js'
    ], 'public/front/assets/js/vendor.css')

    .copyDirectory('resources/views/front/images', 'public/front/assets/images')
    .copyDirectory('resources/views/front/fonts', 'public/front/assets/fonts')

    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

    .version();
