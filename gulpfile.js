var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .scripts(
            [
                '/node_modules/jquery/dist/jquery.min.js',
                '/node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
                '/resources/assets/js/master.js'
            ],
            'public/js/all.js',
            './'
        )
        .copy('resources/assets/js/app', 'public/js/app')
        .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
});
