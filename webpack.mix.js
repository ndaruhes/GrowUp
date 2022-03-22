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

mix.js('resources/js/app.js', 'public/js/')
    .sass('resources/sass/app.scss', 'public/css/')
    .sass('resources/sass/navbar.scss', 'public/css/')
    .sass('resources/sass/dashboard.scss', 'public/css/')
    .sass('resources/sass/footer.scss', 'public/css/')
    .sass('resources/sass/home.scss', 'public/css/')
    .sass('resources/sass/auth.scss', 'public/css/')
    .sass('resources/sass/register.scss', 'public/css/')
    .sass('resources/sass/banner.scss', 'public/css/')
    .sass('resources/sass/explore.scss', 'public/css/')
    .sass('resources/sass/course_detail.scss', 'public/css/')
    .sass('resources/sass/user_home.scss', 'public/css/')
    .sass('resources/sass/contact.scss', 'public/css/')
    .sass('resources/sass/about.scss', 'public/css/')
    .disableNotifications()
    .sourceMaps();
