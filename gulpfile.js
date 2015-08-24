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
    mix.sass('admin.sass','admin/assets/css');
    mix.styles(['semantic.css','../../../admin/assets/css/app.css'],'admin/assets/css');

    mix.scripts(['jquery-1.11.3.min.js', 'admin.js','semantic.min.js'], 'admin/assets/js/app.js')

});
