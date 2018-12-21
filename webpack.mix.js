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
   .sass('resources/sass/home/app.scss', 'public/assets/home/css');
    .sass('resources/sass/home/index.scss', 'public/assets/home/index');


// 浏览器自动刷新
mix.browserSync({
    proxy: 'tailwind-my.test'
});
