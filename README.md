# laravel-binance
Laravel implementation of the Binance crypto exchange trading API

## Install

#### Install via Composer

```
composer require decode9/laravel-binance
```

Utilises autoloading in Laravel 5.5+. For older versions add the following lines to your `config/app.php`

```php
'providers' => [
        ...
        decode9\binance\BinanceServiceProvider::class,
        ...
    ],


 'aliases' => [
        ...
        'Kraken' => adman9000\binance\BinanceAPIFacade::class,
    ],
```

## Features

Price tickers, balances, trades
