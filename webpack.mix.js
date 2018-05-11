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


mix.webpackConfig({devtool: "source-map"});

mix.js('resources/assets/js/app.js', 'public/js')
    .sourceMaps();

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/admin/bunjouchis/bunjouchis.scss', 'public/css/admin/bunjouchis')
    .options({
        processCssUrls: false,
        autoprefixer: true,
        postCss: [
            require('postcss-css-variables')()
        ],
        outputStyle: 'compressed'
    })
    .sourceMaps();
