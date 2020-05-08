const mix = require('laravel-mix');

mix.webpackConfig({
    // resolve: {
    //     extensions: ['.js', '.vue', '.json'],
    //     alias: {
    //         'vue$': 'vue/dist/vue.esm.js',
    //         '@': __dirname + '/resources/js'
    //     },
    // },
    output: {
        chunkFilename: 'dist/js/chunks/[name].js?id=[hash]',
    }
});

mix.js('resources/js/app.js', 'public/dist/js');
