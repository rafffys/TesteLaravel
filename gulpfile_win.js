var elixir = require('laravel-elixir');
var mainBowerFiles = require('main-bower-files');

var paths = {
    'jquery': './bower_components/jquery/',
    'jqueryujs': './bower_components/jquery-ujs/src/',
    'bootstrap': './bower_components/bootstrap-sass/assets/javascripts/'
}

elixir(function(mix) {
    mix.sass('app.scss');
	mix.scripts([
        paths.jquery + "dist/jquery.js",
        paths.jqueryujs + "rails.js",
        paths.bootstrap + "bootstrap.js"
    ],'public/js/3rd-party.js','/');
   // mix.scripts(mainBowerFiles('**/*.js'), '/','/public/js/3rd-party.js');
});

