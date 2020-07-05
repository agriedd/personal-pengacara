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
    .js('resources/js/pages/artikel.js', 'public/js')
    .js('resources/js/pages/album.js', 'public/js')
    .js('resources/js/pages/admin-index.js', 'public/js')
    .js('resources/js/pages/kunjungan.js', 'public/js')
    .js('resources/js/pages/publik.js', 'public/js')
    .js('resources/js/pages/galeri.js', 'public/js')
    .js('resources/js/pages/bahan-hukum.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
