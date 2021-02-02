let mix = require('laravel-mix');

mix.js('src/js/main.js', 'js').sass('src/scss/style.scss', 'css').setPublicPath('dist');