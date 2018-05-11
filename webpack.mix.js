const {mix} = require('laravel-mix');

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

mix.browserSync({
    proxy: 'localhost:8080',
    files: [
        'resources/views/**/*.php',
        'app/**/*.php',
        'public/css/**/*.css',
        'public/js/**/*.js',
        'public/html/*.html'
    ]
});


mix.sass('resources/assets/sass/admin/app.scss', 'public/css/admin')
    .sass('resources/assets/sass/admin/bunjouchis/bunjouchis.scss', 'public/css/admin/bunjouchis')
    .sourceMaps();
    // .options({
    //     processCssUrls: false,
    //     autoprefixer: true,
    //     postCss: [
    //         require('postcss-css-variables')()
    //     ],
    //     outputStyle: 'compressed'
    // });


mix.webpackConfig({devtool: "source-map"});




//Combine jQuery

mix.js('resources/assets/js/admin/app.js', 'public/js/admin')
    .sourceMaps();
