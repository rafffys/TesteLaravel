var elixir = require('laravel-elixir');
var bowerFiles = require('main-bower-files');

elixir(function(mix) {
    mix.sass('app.scss');
    mix.scripts(bowerFiles('**/*.js'), 'public/js/3rd-party.js', '/');
    mix.scriptsIn('', 'public/js/app.js');
});