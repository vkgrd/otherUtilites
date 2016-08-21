var elixir = require('laravel-elixir');
elixir.config.assetsPath = 'src';
elixir.config.publicPath = 'pub';

elixir(function(mix) {
	mix.sass('style.scss', 'pub/css/style.min.css');
	mix.scripts('dev.js', 'pub/js/main.min.js');
});
