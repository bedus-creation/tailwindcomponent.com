const mix = require('laravel-mix');

mix.setPublicPath('/dist/js/');
mix.options({
    output: {
        chunkFilename: '/dist/js/[name].js?id=[chunkhash]',
    }
});

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
