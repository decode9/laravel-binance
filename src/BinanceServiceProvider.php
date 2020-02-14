<?php namespace decode9\binance;

/**
 * @author  adman9000
 */
use Illuminate\Support\ServiceProvider;

class BinanceServiceProvider extends ServiceProvider {

	public function boot() 
	{
		$this->publishes([
			__DIR__.'/../config/binance.php' => config_path('binance.php')
		], 'binance');
		$this->app->bind('binance', function() {
			return new BinanceAPI();
		});
	} // boot

	public function register() 
	{
		$this->mergeConfigFrom(__DIR__.'/../config/binance.php', 'binance');

	} // register
}