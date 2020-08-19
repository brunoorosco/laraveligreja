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

//mix.js('resources/js/app.js', 'public/js')
//  .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/views/admin/assets/css/bootstrap.css',
    'resources/views/admin/assets/css/now-ui-dashboard.css',
    'resources/views/admin/assets/demo/demo.css',
],
    'public/admin/assets/css/style.css',
);


mix.js([
    'resources/views/admin/assets/js/plugins/bootstrap-notify.js',
    'resources/views/admin/assets/js/now-ui-dashboard.min.js?v=1.5.0',
    'resources/views/admin/assets/js/core/bootstrap.min.js',
    'resources/views/admin/assets/js/core/jquery.min.js',
    'resources/views/admin/assets/js/core/popper.min.js', 
    'resources/views/admin/assets/js/plugins/perfect-scrollbar.jquery.min.js',
    'resources/views/admin/assets/js/plugins/chartjs.min.js',
    'resources/views/admin/assets/demo/demo.js',
],
    'public/admin/assets/js/main.js',
);