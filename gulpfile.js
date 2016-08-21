var elixir = require('laravel-elixir');
elixir.config.assetsPath = 'src';
elixir.config.assetsPath = 'pub';

elixir(function(mix) {
	mix.sass('style.scss', 'pub/css/style.min.css');
});
