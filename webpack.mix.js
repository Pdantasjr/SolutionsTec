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
    ], 'public/front/assets/js/vendor.js')

    .copyDirectory('resources/views/front/images', 'public/front/assets/images')
    .copyDirectory('resources/views/front/fonts', 'public/front/assets/fonts')

    .styles([
        'resources/views/back/assets/plugins/materialize/css/materialize.min.css',
        // 'resources/views/back/assets/plugins/metrojs/MetroJs.min.css',
        'resources/views/back/assets/plugins/weather-icons-master/css/weather-icons.min.css',
        'resources/views/back/assets/css/alpha.min.css',
        'resources/views/back/assets/css/custom.css',
    ], 'public/back/assets/css/vendor.css')

    .scripts([
        'resources/views/back/assets/plugins/jquery/jquery-2.2.0.min.js',
        'resources/views/back/assets/plugins/materialize/js/materialize.min.js',
        'resources/views/back/assets/plugins/material-preloader/js/materialPreloader.min.js',
        'resources/views/back/assets/plugins/jquery-blockui/jquery.blockui.js',
        // 'resources/views/back/assets/plugins/waypoints/jquery.waypoints.min.js',
        // 'resources/views/back/assets/plugins/counter-up-master/jquery.counterup.min.js',
        // 'resources/views/back/assets/plugins/jquery-sparkline/jquery.sparkline.min.js',
        // 'resources/views/back/assets/plugins/chart.js/chart.min.js',
        // 'resources/views/back/assets/plugins/flot/jquery.flot.min.js',
        // 'resources/views/back/assets/plugins/flot/jquery.flot.time.min.js',
        // 'resources/views/back/assets/plugins/flot/jquery.flot.symbol.min.js',
        // 'resources/views/back/assets/plugins/flot/jquery.flot.resize.min.js',
        // 'resources/views/back/assets/plugins/flot/jquery.flot.tooltip.min.js',
        // 'resources/views/back/assets/plugins/curvedlines/curvedLines.js',
        // 'resources/views/back/assets/plugins/peity/jquery.peity.min.js',
        'resources/views/back/assets/js/alpha.min.js',
        // 'resources/views/back/assets/js/pages/dashboard.js',
    ], 'public/back/assets/js/vendor.js')

    .copyDirectory('resources/views/back/assets/images', 'public/back/assets/images')
    // .copyDirectory('resources/views/back/assets/plugins/materialize/fonts/roboto', 'public/back/assets/fonts')

    //Login default laravel

    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

    .version();

