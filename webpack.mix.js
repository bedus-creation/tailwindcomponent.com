const mix = require('laravel-mix');

mix.webpackConfig({
    output: {
        chunkFilename: 'dist/js/chunks/[name].js?id=[hash]',
    }
});

mix.js('resources/js/app.js', 'public/dist/js')
    .sass('resources/sass/app.scss', 'public/dist/css');
